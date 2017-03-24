<div class="span11">
    <div class="widget-box"> 
        <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Add New Work Order</h5>
        </div>
        <div class="widget-content">
            <div class="row-fluid">
                <?php echo form_open(); ?>
                <div class="span12">
                    <div class="control-groups">
                        <h4 class="control-label">Work Order Info</h4>
                        <div class="controls">
                            <?php echo form_input('workorder_title', '', array('class' => 'span11', 'placeholder' => 'Work order title*')) ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <?php echo form_textarea('workorder_description', '', array('class' => 'span11', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                        </div>
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
                        <?php echo form_input(array('type' => 'datetime', 'name' => 'workorder_duedate', 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'datetime', 'name' => 'workorder_end_duedate', 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', 'daily' => 'Daily', 'weekdays' => 'Week days', 'every-week' => 'Every Week', 'every-two-weeks' => 'Every Two Weeks', 'every-month' => 'Every Month', 'every-year' => 'Every Year'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Tasks', 'workorder_tasks', array('class' => 'control-label')); ?>
                        <table class="table">
                            <tr>
                                <td><?php echo form_dropdown('workorder_task_type', $workorder_task_types, FALSE, array('class' => 'form-control')); ?></td>
                                <td><?php echo form_input('workorder_task', '', array('class' => 'form-control', 'placeholder' => 'Task')); ?></td>
                                <td><?php echo form_checkbox('newsletter', 'accept', TRUE); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                    </div>
                    <div class="form-group">
                        <label class="switch">
                            <input type="checkbox" name="workorder_requires_signature" value="1" checked>
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

