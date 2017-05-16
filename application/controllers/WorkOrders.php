<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkOrders
 *
 * @author Murtaza
 */
class WorkOrders extends CI_Controller {

    public $page_title;

    function __construct() {
        parent::__construct();
        if (!$this->input->is_ajax_request()) {
            $this->output->set_title('Primo CMMS | Work Orders');
            $this->output->set_template('default');
        }
        $this->load->model('Workorders_m');
        $this->load->model('Employees_m');
        $this->load->model('Teams_m');
        $this->load->model('Locations_m');
        $this->load->model('Categories_m');
        $this->load->model('Tasks_m');
        $this->load->model('Task_Types_m');
    }

    public function index() {
        $this->data['page_title'] = 'Work Orders';
        $this->data['workorders'] = $this->Workorders_m->get_all();
        $this->load->view('WorkOrders/Index', $this->data);
    }

    public function add() {
        $this->data['page_title'] = 'Work Orders > Add New Work Order';
        $this->data['workorder_locations'] = $this->Locations_m->get_dropdown();
        $this->data['workorder_categories'] = $this->Categories_m->get_dropdown();
        $this->data['workorder_task_types'] = $this->Task_Types_m->get_dropdown();
        $this->data['workorder_Employees'] = $this->Employees_m->get_dropdown();
        $this->data['workorder_Teams'] = $this->Teams_m->get_dropdown();
        $this->load->view('WorkOrders/Add', $this->data);
        if ($this->input->post()) {
            $insert = $this->Workorders_m->insert(array(
                'title' => $this->input->post('workorder_title'),
                'description' => $this->input->post('workorder_description'),
                'priority' => $this->input->post('workorder_priority'),
                'location_id' => $this->input->post('workorder_location'),
                'category_id' => $this->input->post('workorder_category'),
                'employee_id' => $this->input->post('workorder_worker'),
                'team_id' => $this->input->post('workorder_team'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
                'rates' => $this->input->post('workorder_rate'),
                'requires_sign' => $this->input->post('workorder_requires_signature'),
                'repeating_schedule' => $this->input->post('workorder_repeating_schedule'),
                'status' => '1',
                'modified_by' => '1'
            ));
            foreach ($this->input->post('workorder_task') as $task) {
                $insert_task = $this->Tasks_m->insert();
            }
            if ($insert === FALSE) {
                $this->load->view('Erorr');
            } else {
                $tasks_type = $this->input->post('workorder_task_type');
                $tasks_title = $this->input->post('workorder_task_title');
                $tasks_description = $this->input->post('workorder_task_description');
                $num_array = count($tasks_title, 1);
                //echo $num_array;
                for ($i = 0; $i < $num_array; $i++) {
                    $tasks[$i] = array('type' => $tasks_type[$i], 'title' => $tasks_title[$i], 'description' => $tasks_description[$i]);
                }
                foreach ($tasks as $task) {
                    print_r($task['title']);
                    $insert_task = $this->Tasks_m->insert(array(
                        'title' => $task['title'],
                        'description' => $task['description'],
                        'type' => $task['type'],
                        'status' => 1,
                        'workorder_id' => ($this->Workorders_m->get_next_id()) - 1,
                        'modified_by' => '1'
                    ));
                }
                redirect('WorkOrders');
            }
        }
    }

    public function view($id = null) {
        $this->data['page_title'] = 'Work Orders > Work Order Title';
        $this->data['Workorder'] = $this->Workorders_m->get_all();
        $this->data['workorder'] = $this->Workorders_m->get($id);
        $this->data['locations'] = $this->Locations_m->get_all();
        $this->load->view('WorkOrders/View', $this->data);
    }

    public function edit($id = NULL) {
        if ($id) {
            $this->data['page_title'] = 'Work Orders > Edit > Order Title';
            $this->data['Workorders'] = $this->Workorders_m->get_all();
            $this->data['Workorder'] = $this->Workorders_m->get_by('id', $id);
            $this->data['workorder_Employees'] = $this->Employees_m->get_dropdown();
            $this->data['workorder_Teams'] = $this->Teams_m->get_dropdown();
            $this->data['workorder_Tasks'] = $this->Tasks_m->get_many_by('workorder_id', $id);
            $this->data['workorder_task_types'] = $this->Task_Types_m->get_dropdown();
            if ($this->input->post()) {

                $this->Workorders_m->update($this->input->post('id'), array(
                    'title' => $this->input->post('workorder_title'),
                    'description' => $this->input->post('workorder_description'),
                    'priority' => $this->input->post('workorder_priority'),
                    'location_id' => $this->input->post('workorder_location'),
                    'employee_id' => $this->input->post('workorder_worker'),
                    'team_id' => $this->input->post('workorder_team'),
                    'start_date' => $this->input->post('start_date'),
                    'end_date' => $this->input->post('end_date'),
                    'rates' => $this->input->post('workorder_rate'),
                    'repeating_schedule' => $this->input->post('workorder_repeating_schedule'),
                    'status' => '1',
                    'modified_by' => '1'
                ));
            }
            $this->load->view('WorkOrders/Edit', $this->data);
        } else {
            redirect(site_url('Workorders/index'));
        }
    }

    public function get_task_row() {
        if ($this->input->is_ajax_request()) {
            $workorder_task_types = $this->Task_Types_m->get_dropdown();
            $rowid = rand(3, 6);
            echo '
        <tr id="task_row_' . $rowid . '">'
            . '<td>' .
            form_dropdown('workorder_task_type[]', $workorder_task_types, FALSE, array('class' => 'span12')) . '
                    </td>
                    <td>
                ' . form_input('workorder_task_title[]', '', array('class' => 'span12', 'placeholder' => 'Task')) . '
                    </td>
                    <td>
                ' . form_input('workorder_task_description[]', '', array('class' => 'span12', 'placeholder' => 'Description')) . '
                    </td>
        </tr>';
        }
    }

    public function change_status() {
        
    }

    public function generate_pdf() {
        
    }

}
