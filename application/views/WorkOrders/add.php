<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?><?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Add New Work Order</h4>
            <div class="row">
                <?php echo form_open(); ?>
                <div class="col-md-12">
                    <div class="form-group">
                        <h4 class="control-label">Work Order Info</h4>
                        <?php echo form_input('workorder_title', '', array('class' => 'form-control', 'placeholder' => 'Work order title*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('workorder_description', '', array('class' => 'form-control', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                    </div>
                    <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '1', TRUE); ?> Low
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '2', FALSE); ?> Medium
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '3', FALSE); ?> High
                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_location', $workorder_locations, FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_category', $workorder_categories, FALSE, array('class' => 'form-control')) ?>
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
                        <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', 'daily' => 'Daily', 'weekdays' => 'Week days', 'every-week' => 'Every Week', 'every-two-weeks' => 'Every Two Weeks', 'every-month' => 'Every Month', 'every-year' => 'Every Year'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Tasks', 'workorder_tasks', array('class' => 'control-label')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                    </div>
                    <div class="form-group">
                        <label class="switch">
                            <input type="checkbox" name="workorder_requires_signature" checked>
                            <div class="slider round"></div>
                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('blocks/footer'); ?>