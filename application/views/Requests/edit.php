<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-4">
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 1
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 2
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 3
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 4
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 5
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <a href="<?php echo site_url('Requests/add'); ?>" class="btn btn-primary">+</a>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Assign Work Order Request</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h4 class="control-label">Work Request Info</h4>
                        <?php echo form_input('request_tittle', '', array('class' => 'form-control', 'placeholder' => 'Request title*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('workorder_title', '', array('class' => 'form-control', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                    </div>
                    <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '0', FALSE); ?> None
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '1', FALSE); ?> Low
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '2', FALSE); ?> Medium
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '3', FALSE); ?> High
                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_location', array('Select Location', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_dropdown('workorder_worker', array('Select Main Worker', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_duedate', 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_end_duedate', 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('blocks/footer'); ?>