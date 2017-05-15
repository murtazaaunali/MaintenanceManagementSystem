<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Work Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($Workorders as $workorder): ?>
                        <li>
                            <?php
                            switch ($workorder->status) {
                                case "0":
                                    echo '<span class="label label-important">Closed</span>';
                                    break;

                                case "1":
                                    echo '<span class="label label-success">Open</span>';
                                    break;

                                case "2":
                                    echo '<span class="label label-info">In progress</span>';
                                    break;

                                case "3":
                                    echo '<span class="label label-warning">On hold</span>';
                                    break;

                                default :
                                    echo "";
                            }
                            ?>                                
                            <div class="article-post">
                                <div class="fr"><a href="<?php echo site_url('WorkOrders/view/' . $workorder->id); ?>" class="btn btn-default btn-mini">View</a> <a href="<?php echo site_url('WorkOrders/edit/' . $workorder->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                                <span class="user-info"> #<?php echo $workorder->id; ?> By: john Deo / <?php echo $workorder->date_created; ?> </span>
                                <p><a href="<?php echo site_url('WorkOrders/edit/' . $workorder->id); ?>"><?php echo substr($workorder->title, 0, 85); ?>...</a> </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Edit Work Order</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <?php echo form_open(); ?>
                        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
                        <div class="form-group">
                            <h4 class="control-label">Work Order Info</h4>
                            <?php echo form_input('workorder_title', set_value('workorder_title', $Workorder->title), array('class' => 'span12', 'required' => 'required')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_textarea('workorder_description', set_value('workorder_description', $Workorder->description), array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                            <div class="controls">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="1" <?php
                                        if ($Workorder->priority == 1): echo "checked";
                                        endif;
                                        ?>>
                                        ! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="2" <?php
                                        if ($Workorder->priority == 2): echo "checked";
                                        endif;
                                        ?>>
                                        !! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="3" <?php
                                        if ($Workorder->priority == 3): echo "checked";
                                        endif;
                                        ?>>
                                        !!! </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_location', array('Select Main Worker', '1' => 'Location1', '2' => 'Location2', '3' => 'Loacation3'), set_value('workorder_location', $Workorder->location_id), array('class' => 'span12', 'required' => 'required')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Staff', 'workorder_staff', array('class' => 'control-label')); ?>
                            <?php echo form_dropdown('workorder_worker', $workorder_Employees, set_value('workorder_worker', $Workorder->employee_id), TRUE, array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Team', 'workorder_team', array('class' => 'control-label')); ?>
                            <?php echo form_dropdown('workorder_team', $workorder_Teams, set_value('workorder_team', $Workorder->team_id), FALSE, array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <?php echo form_label('Assign Start Date', 'start_date', array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <div class="input-group date" id="datepicker1">
                                        <input type="text" class="form-control" name="start_date" id="workorder_start_date" value="<?php echo $Workorder->start_date ?>" />
                                        <span class="input-group-addon">
                                            <span class="icon icon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <?php echo form_label('End Due Date', 'end_date', array('class' => 'control-label')); ?>
                                <div class="input-group date" id="datepicker2">
                                    <input type="text" class="form-control" name="end_date" id="workorder_end_date" value="<?php echo $Workorder->end_date ?>" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                            <?php echo form_label('Rates', '', array('class' => 'control-label')); ?>
                        <div class="form-group">
                            <?php echo form_input('workorder_rate', set_value('workorder_rate', $Workorder->rate), array('class' => 'span12', 'placeholder' => 'Rates*','required'=>'required')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Repeating Schedule', 'workorder_priority', array('class' => 'control-label')); ?>
                            <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', '1' => 'Daily', '2' => 'Week days', '3' => 'Every Week', '4' => 'Every Two Weeks', '5' => 'Every Month', '6' => 'Every Year'), set_value('workorder_repeating_schedule', $Workorder->repeating_schedule), array('class' => 'span12')); ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Tasks', 'workorder_tasks', array('class' => 'span10')); ?>
                            <div class="span1">
                                <div class="row-fluid">
                                    <div class="span6"><a class="pull-right" id="add_row"><i class="icon icon-plus"></i></a></div>
                                    <div class="span6"><a class="pull-right" id="del_row"><i class="icon icon-remove"></i></a></div>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody id="tasks">
                                    <?php
                                    foreach ($workorder_Tasks as $tasks) {
                                        
                                        echo '
        <tr id="task_row">'
                                        . '<td>' .
                                        form_dropdown('workorder_task_type[]', $workorder_task_types, $tasks->type, array('class' => 'span12')) . '
                    </td>
                    <td>
                ' . form_input('workorder_task_title[]', '', array('class' => 'span12', 'placeholder' => 'Task')) . '
                    </td>
                    <td>
                ' . form_input('workorder_task_description[]', '', array('class' => 'span12', 'placeholder' => 'Description')) . '
                    </td>
        </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                        </div>
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox" name="workorder_requires_signature" <?php echo set_value('workorder_requires_signature', $Workorder->requires_sign) == 1 ? 'checked' : '' ?>>
                                <div class="slider round"></div>
                            </label>
                        </div>
                        <div class="form-group">
                            <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>