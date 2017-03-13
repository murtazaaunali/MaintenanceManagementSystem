<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-6">
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
<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="tabbable" id="tabs-145895">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#panel-168166" data-toggle="tab">Details</a>
                            </li>
                            <li>
                                <a href="#panel-403986" data-toggle="tab">Updates</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="panel-168166">
                                <h3>Add Create your first asset and organize by location in the "Assets & Locations" tab.</h3>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <a href="#" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-lock"></i></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="btn btn-warning btn-circle btn-lg"><i class="glyphicon glyphicon-stop"></i></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-repeat"></i></a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="btn btn-success btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 column">
                                        <h3>Location Details</h3>
                                        <table class="table table-responsive table-bordered">
                                            <tr>
                                                <td>Location Address</td>
                                                <td>Location Address 1</td>
                                            </tr>
                                        </table>

                                        <h3>Tasks</h3>

                                        <table class="table table-responsive table-bordered">
                                            <tr>
                                                <td>Task Name 1</td>
                                                <td>Comments Button info button</td>
                                                <td>Done checkbox</td>
                                            </tr>
                                            <tr>
                                                <td>Task Name 2</td>
                                                <td>Comments Button info button</td>
                                                <td>Done Checkbox</td>
                                            </tr>
                                            <tr>
                                                <td>Task Name 3</td>
                                                <td>Comments Button info button</td>
                                                <td>Done Checkbox</td>
                                            </tr>
                                        </table>
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
                            <div class="tab-pane" id="panel-403986">
                                <p>
                                    Howdy, I'm in Section 2.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<a href="<?php echo site_url('/WorkOrders/add'); ?>" class="btn paper-button paper-floating-action-button">
    <i class="glyphicon glyphicon-plus"></i>
</a>
</div>
<?php $this->load->view('blocks/footer'); ?>
