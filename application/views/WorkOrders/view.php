<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Work Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($Workorder as $workorders): ?>
                        <li>
                            <?php
                            switch ($workorders->status) {
                                case "0":
                                    echo '<span class="label label-success">Closed</span>';
                                    break;

                                case "1":
                                    echo '<span class="label label-important">Open</span>';
                                    break;

                                case "2":
                                    echo '<span class="label label-info">In Progress</span>';
                                    break;

                                case "3":
                                    echo '<span class="label label-warning">On Hold</span>';
                                    break;

                                default :
                                    echo "";
                            }
                            ?>                                
                            <div class="article-post">
                                <div class="fr"><a href="<?php echo site_url('WorkOrders/view/' . $workorders->id); ?>" class="btn btn-default btn-mini">View</a> <a href="<?php echo site_url('WorkOrders/edit/' . $workorders->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                                <span class="user-info"> #<?php echo $workorders->id; ?> By: john Deo / <?php echo $workorder->date_created; ?> </span>
                                <p><a href="<?php echo site_url('WorkOrders/view/' . $workorders->id); ?>"><?php echo substr($workorders->title, 0, 85); ?>...</a> </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5><?php echo ucwords($workorder->title); ?></h5>
            </div>
            <div class="widget-content nopadding">
                <div class="row-fluid">
                    <ul class="task-status-btn list-inline">
                        <li class="open <?php if ($workorder->status == 1): echo "active";
                    endif; ?>" id="open_status" data-workorder="<?php echo $workorder->id; ?>">
                            <span class="status-circle">
                                <i class="icon-unlock"></i>
                            </span>
                            <p class="status-title">Open</p>
                        </li>
                        <li class="on-hold <?php if ($workorder->status == 3): echo "active";
                    endif; ?>" id="hold_status" data-workorder="<?php echo $workorder->id; ?>">
                            <span class="status-circle">
                                <i class="icon-stop"></i>
                            </span>
                            <p class="status-title">On Hold</p>
                        </li>
                        <li class="in-progress <?php if ($workorder->status == 2): echo "active";
                    endif; ?>" id="progress_status" data-workorder="<?php echo $workorder->id; ?>">
                            <span class="status-circle">
                                <i class="icon-repeat"></i>
                            </span>
                            <p class="status-title">In Progress</p>
                        </li>
                        <li class="closed <?php if ($workorder->status == 0): echo "active";
                    endif; ?>" id="close_status" data-workorder="<?php echo $workorder->id; ?>">
                            <span class="status-circle">
                                <i class="icon-lock"></i>
                            </span>
                            <p class="status-title">Closed</p>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Updates</a></li>
                                </ul>
                            </div>
                            <div class="widget-content tab-content">
                                <div id="tab1" class="tab-pane active">
                                    <div class="span12 column">
                                        <h5>Work Orders Details</h5>
                                        <table class="table table-responsive table-bordered">
                                            <tr>
                                                <td>Word Order #: <?php echo $workorder->id; ?></td>
                                                <td>Due Date: <?php echo $workorder->end_date; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Created On: <?php echo $workorder->date_created; ?></td>
                                                <td>Created By: <?php echo $this->ion_auth->user($workorder->modified_by)->row()->first_name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Assigned To: <?php
                                                    foreach ($employees as $employee) {
                                                        if ($workorder->employee_id === $employee->id) {
                                                            echo $employee->first_name . " " . $employee->last_name . " (" . $employee->email . ")";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>Last Updated: <?php echo $workorder->date_modified; ?></td>
                                            </tr>
                                        </table>
                                        <h5>Location Details</h5>
                                        <table class="table table-responsive table-bordered">
<?php foreach ($locations as $location): ?>
                                                <?php if ($location->id === $workorder->location_id): ?>
                                                    <tr>
                                                        <td><?php echo $location->name; ?></td>
                                                        <td><?php echo $location->address; ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </table>
                                        <h5>Tasks</h5>
                                        <table class="table table-responsive table-bordered">
<?php foreach ($tasks as $task): ?>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td><?php echo $task->title; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $task->type; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
    <?php echo $task->description; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input class="btn btn-danger" type="button" value="Incomplete" onclick="">
                                                                    <input class="btn btn-warning" type="button" value="On Hold" onclick="">
                                                                    <input class="btn btn-primary" type="button" value="In Progress" onclick="">
                                                                    <input class="btn btn-success" type="button" value="Completed" onclick="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
<?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>

                                <div id="tab2" class="tab-pane">
                                    <div class="span12 column">
                                        <h5>Update Notes</h5>
                                        <div class="control-group">
                                            <div class="controls">
                                            <?php echo form_textarea('reques_description', '', array('class' => 'span12', 'placeholder' => 'Post an Update', 'rows' => '3')); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
<?php echo form_submit("Add Update", "Add Update", array('class' => 'btn btn-primary pull-right')); ?>
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

<!--<a href="<?php //echo site_url('/WorkOrders/add');                               ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>-->

