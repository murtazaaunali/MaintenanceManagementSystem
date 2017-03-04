<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-5">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul class="timeline list-unstyled">
                        <li class="timeline-item first-item">
                            <ul class="list-unstyled tasks-list">
                                <?php foreach ($workorders as $workorder): ?>
                                    <li class="task-item show-pointer active">
                                        <div class="task-item-container task-open">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h2 class="media-heading">
                                                        <span title="Work Order Priority" class="priority"><?php echo str_repeat("!", $workorder->priority); ?></span>
                                                        <?php echo substr($workorder->title, 0, 85); ?>...
                                                    </h2>
                                                    <div class="task-meta-data">
                                                        <span class="task-number">#<?php echo $workorder->id; ?></span>
                                                        <span class="time-literal"><?php echo $workorder->date_created; ?></span>
                                                        <span class="updates line-icon">No. of Task</span>
                                                        <span class="ml-10">Location / Client</span>
                                                        <span class="ml-10 grey-text"> </span>
                                                        <span class="ml-10 assigned-initial">Username Initials Assigned</span>
                                                    </div>
                                                </div>
                                                <div class="media-right">
                                                    <div class="task-status-box">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-lock"></i></span>
                                                        <span class="status-name">Open</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Add New Work Order</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h4 class="control-label">Work Order Info</h4>
                        <?php echo form_input('workorder_title', set_value('workorder_title', $workorder->title), array('class' => 'form-control', 'placeholder' => 'Work order title*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('workorder_title', set_value('workorder_tittle', $workorder->description), array('class' => 'form-control', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                    </div>
                    <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '1', set_value('workorder_priority', $workorder->priority) == 1 ? TRUE : FALSE ); ?> Low
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '2', set_value('workorder_priority', $workorder->priority) == 2 ? TRUE : FALSE); ?> Medium
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '3', set_value('workorder_priority', $workorder->priority) == 3 ? TRUE : FALSE); ?> High
                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_location', array('Select Main Worker', '1'=>'Location1', '2'=>'Location2', '3'=>'Loacation3'),set_value('workorder_location', $workorder->location_id), array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_dropdown('workorder_worker', set_value('workorder_worker', $workorder->category_id), TRUE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_duedate', 'value' => set_value('workorder_duedate', $workorder->start_date), 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_end_duedate', 'value' => set_value('workorder_end_duedate', $workorder->end_date), 'class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', '1' => 'Daily', '2' => 'Week days', '3' => 'Every Week', '4' => 'Every Two Weeks', '5' => 'Every Month', '6' => 'Every Year'), set_value('workorder_repeating_schedule', $workorder->repeating_schedule), array('class' => 'form-control')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                    </div>
                    <div class="form-group">
                        <label class="switch">
                            <input type="checkbox" name="workorder_requires_signature" <?php echo set_value('workorder_requires_signature', $workorder->requires_sign) == 1 ? 'checked' : '' ?>>
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
<?php $this->load->view('blocks/footer'); ?>