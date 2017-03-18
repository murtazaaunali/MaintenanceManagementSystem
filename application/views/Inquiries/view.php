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
                                <?php foreach ($inquiries as $inquiry): ?>
                                    <li class="task-item show-pointer">
                                        <a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>">
                                            <div class="task-item-container task-open">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h2 class="media-heading">
                                                            An inquiry from 
                                                            <?php echo $inquiry->fullname; ?>
                                                        </h2>
                                                        <div class="task-meta-data">
                                                            <span class="task-number">#<?php echo $inquiry->id; ?></span>
                                                            <span class="time-literal"><?php echo $inquiry->date_created; ?></span>
                                                            <span class="updates line-icon"><?php echo $inquiry->type; ?></span>
                                                            <span class="ml-10"><?php echo $inquiry->address; ?></span>
                                                            <span class="ml-10 grey-text"><?php echo substr($inquiry->comments, 0, 55); ?>... </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="task-status-box">
                                                            <?php
                                                            switch ($inquiry->status) {
                                                                case "0":
                                                                    echo '<span class="status-circle task-complete"><i class="fa fa-ok"></i></span>
                                                        <span class="status-name">Closed</span>';
                                                                    break;

                                                                case "1":
                                                                    echo '<span class="status-circle task-open"><i class="fa fa-lock"></i></span>
                                                        <span class="status-name">Open</span>';
                                                                    break;

                                                                case "2":
                                                                    echo '<span class="status-circle task-progress"><i class="fa fa-repeat"></i></span>
                                                        <span clas="status-name">In progress</span>';
                                                                    break;

                                                                case "3":
                                                                    echo '<span class="status-circle task-hold"><i class="fa fa-stop"></i></span>
                                                        <span class="status-name">On hold</span>';
                                                                    break;

                                                                default :
                                                                    echo "";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
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

                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-unlock-alt"></i></a>
                                    </div>

                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-info btn-circle btn-lg"><i class="fa fa-repeat"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-stop"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-success btn-circle btn-lg"><i class="fa fa-lock"></i></a>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php $this->load->view('blocks/footer'); ?>
