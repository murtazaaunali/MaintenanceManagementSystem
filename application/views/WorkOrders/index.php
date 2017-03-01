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
                                                        <?php echo substr($workorder->title, 0, 85);?>...
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

    <h1 class="text-center"><i class="glyphicon glyphicon-repeat"></i> Start here</h1>
    <h2 class="text-center">Begin by selecting a Work Order</h2>
    <a href="<?php echo site_url('/WorkOrders/add'); ?>" class="btn paper-button paper-floating-action-button">
        <i class="glyphicon glyphicon-plus"></i>
    </a>
</div>
<?php $this->load->view('blocks/footer'); ?>
