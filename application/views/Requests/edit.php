

<div class="span6">
<div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul class="timeline list-unstyled">
                        <li class="timeline-item first-item">
                            <ul class="list-unstyled tasks-list">
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Requests/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="fa fa-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Requests/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="fa fa-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Requests/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="fa fa-pencil"></i></span>
                                                    </a>
                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Requests/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="fa fa-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="span6">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Assign Work Order Request</h4>
            <div class="row-fluid">
                <div class="span12">
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
