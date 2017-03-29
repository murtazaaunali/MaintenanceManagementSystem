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
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="1" checked>
                                        ! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="2">
                                        !! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="workorder_priority" id="workorder_priority" value="3">
                                        !!! </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo form_label('Select location ID', 'workorder_priority', array('class' => 'span12')); ?>
                            <?php echo form_dropdown('workorder_location', $workorder_locations, FALSE, array('class' => 'span12')) ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_label('Select category ID', 'workorder_priority', array('class' => 'span12')); ?>
                            <?php echo form_dropdown('workorder_category', array('Select ID', '1', '2', '3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'span12')); ?>
                            <?php echo form_dropdown('workorder_worker', array('Select Main Worker', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Location3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Assign Start Date', 'start_date', array('class' => 'control-label')); ?>
                            <div class="controls">
                                <div class="input-group date" id="datepicker1">
                                    <input type="text" class="form-control" name="start_date" id="workorder_start_date" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('End Due Date', 'end_date', array('class' => 'control-label')); ?>
                            <div class="input-group date" id="datepicker2">
                                <input type="text" class="form-control" name="end_date" id="workorder_end_date" />
                                <span class="input-group-addon">
                                    <span class="icon icon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', '1' => 'Daily', '2' => 'Week days', '3' => 'Every Week', '4' => 'Every Two Weeks', '5' => 'Every Month', '6' => 'Every Year'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Tasks', 'workorder_tasks', array('class' => 'span10')); ?>
                            <div class="span1">
                                <a href=""><i class="icon "></i></a>
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
                        <label class="switch">
                            <input type="checkbox" name="workorder_requires_signature" value="1" checked>
                            <div class="slider round"></div>
                        </label>
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