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
            <h3>Test Tasks</h3>
            <div class="row clearfix">
<<<<<<< HEAD
                <div class="col-md-12">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <a href="#" class="btn btn-danger btn-circle btn-lg"><i class="glyphicon glyphicon-lock"></i></a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-repeat"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-warning btn-circle btn-lg"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-success btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></a>
                        </div>
                    </div>
                </div>
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
                                    <div class="row clearfix">
                                        <div class="col-md-12 column">
                                            <h3>Location Details</h3>
                                            <table class="table table-responsive table-bordered">
                                                <tr>
                                                    <td>Location Name</td>
                                                    <td>Location Address </td>
                                                </tr>
                                            </table>

                                            <h3>Tasks</h3>


                                            <table class="table table-responsive table-bordered">
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>Task Name 1</td>
                                                            </tr>
                                                            <tr>
                                                                <td> <input type="button" value="Incomplete" onclick="">
                                                                    <input type="button" value="On Hold" onclick="">
                                                                    <input type="button" value="In Progress" onclick="">
                                                                    <input type="button" value="Completed" onclick=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>User Assigned:</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>Task Name 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td> <input type="button" value="Incomplete" onclick="">
                                                                    <input type="button" value="On Hold" onclick="">
                                                                    <input type="button" value="In Progress" onclick="">
                                                                    <input type="button" value="Completed" onclick=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>User Assigned:</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>Task Name 3</td>
                                                            </tr>
                                                            <tr>
                                                                <td> <input class="btn btn-danger" type="button" value="Incomplete" onclick="">
                                                                    <input class="btn btn-warning" type="button" value="On Hold" onclick="">
                                                                    <input class="btn btn-primary" type="button" value="In Progress" onclick="">
                                                                    <input class="btn btn-success" type="button" value="Completed" onclick=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>User Assigned:</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                            </table>
                                            <h3>Work Orders Details</h3>
                                            <table class="table table-responsive table-bordered">
                                                <div class="col-md-12 column">
                                                    <tr>
                                                        <td>Word Order #:</td>
                                                        <td>Due Date</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Created On:</td>
                                                        <td>Created By:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Assigned To:</td>
                                                        <td>Last Updated:</td>
                                                    </tr>
                                            </table>
                                            <h3>Time And Cost</h3>
                                            <table class="table table-responsive table-bordered">
                                                <div class="col-md-12 column">
                                                    <tr>
                                                        <td>Time:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>  <input class="btn btn-success" type="button" value="Start timer" onclick=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cost:</td>
                                                    </tr>
                                            </table>
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
                                    <div class="row clearfix">
                                        <div class="col-md-12 column">
                                            <h3>Update Notes</h3>
                                            <div class="form-group">
                                                <?php echo form_textarea('reques_description', '', array('class' => 'form-control', 'placeholder' => 'Post an Update', 'rows' => '3')); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo form_submit("save", "Post", array('class' => 'btn btn-primary pull-right')); ?>
                                            </div>
                                        </div>
                                    </div>
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
