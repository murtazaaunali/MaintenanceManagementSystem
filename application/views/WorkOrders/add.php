<div class="row-fluid">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Add New Work Order</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <?php echo form_open(); ?>
                    <div class="span12">
                        <div class="control-groups">
                            <h5>Work Order Info</h5>
                            <div class="controls">
                                <?php echo form_input('workorder_title', '', array('class' => 'span12', 'placeholder' => 'Work order title*')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <?php echo form_textarea('workorder_description', '', array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                            <div class="controls">
                                <div data-toggle="buttons-radio" class="btn-group">
                                    <button class="btn btn-large btn-danger" type="button">!</button>
                                    <button class="btn btn-large btn-danger" type="button">!!</button>
                                    <button class="btn btn-large btn-danger" type="button">!!!</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_location', $workorder_locations, FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_category', $workorder_categories, FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'span12')); ?>
                            <?php echo form_dropdown('workorder_worker', array('Select Main Worker', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Assign Due Date', 'workorder_start_date', array('class' => 'control-label')); ?>
                            <div class="controls">
                                <div data-date="12-02-2012" class="input-append date datepicker">
                                    <input type="text" value="12-02-2012"  data-date-for
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                            <?php echo form_input(array('type' => 'datetime', 'name' => 'workorder_end_duedate', 'class' => 'span12')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', 'daily' => 'Daily', 'weekdays' => 'Week days', 'every-week' => 'Every Week', 'every-two-weeks' => 'Every Two Weeks', 'every-month' => 'Every Month', 'every-year' => 'Every Year'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Tasks', 'workorder_tasks', array('class' => 'span10')); ?>
                            <div class="span1">
                                <a href=""><i class="fa fa-plus"></i></a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><?php echo form_dropdown('workorder_task_type', $workorder_task_types, FALSE, array('class' => 'span12')); ?></td>
                                    <td><?php echo form_input('workorder_task', '', array('class' => 'span12', 'placeholder' => 'Task')); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                        </div>
                        <div class="control-group">
                            <label class="switch">
                                <input type="checkbox" name="workorder_requires_signature" value="1" checked>
                                <div class="slider round"></div>
                            </label>
                        </div>
                        <div class="control-group">
                            <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>