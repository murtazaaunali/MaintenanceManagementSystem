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
                            switch ($workorder->status) {
                                case "0":
                                    echo '<span class="label label-important">Closed</span>';
                                    break;

                                case "1":
                                    echo '<span class="label label-success">Open</span>';
                                    break;

                                case "2":
                                    echo '<span class="label label-info">In progress</span>';
                                    break;

                                case "3":
                                    echo '<span class="label label-warning">On hold</span>';
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
        <?php
        print_r($workorder);
        ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5><?php echo ucwords($workorder->title); ?></h5>
            </div>
            <div class="widget-content nopadding">
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="quick-actions">
                            <a class="btn btn-large bg_lo" href="#"><i class="icon-unlock"></i>Open</a>
                            <a class="btn btn-large bg_ly" href="#"><i class="icon-stop"></i>Hold</a>
                            <a class="btn btn-large bg_ls" href="#"><i class="icon-repeat"></i>In progress</a>
                            <a class="btn btn-large bg_lg" href="#"><i class="icon-lock"></i>Completed</a>
                        </ul>
                    </div>
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
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Task Name 1</td>
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
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Task Name 2</td>
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
                                        <h5>Work Orders Details</h5>
                                        <table class="table table-responsive table-bordered">
                                            <div class="span12 column">
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
                                        <h5>Time And Cost</h5>
                                        <table class="table table-responsive table-bordered">
                                            <div class="span12 column">
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

<a href="<?php echo site_url('/WorkOrders/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>

