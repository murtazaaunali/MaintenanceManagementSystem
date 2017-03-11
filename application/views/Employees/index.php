<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?><?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-6">
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
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
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
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
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
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
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
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                    <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
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
<div class="col-md-6">

    <h1 class="text-center"><i class="glyphicon glyphicon-repeat"></i> Start here</h1>
    <h2 class="text-center">Begin by selecting a Work Order</h2>
    <a href="<?php echo site_url('/Employees/add'); ?>" class="btn paper-button paper-floating-action-button">
        <i class="glyphicon glyphicon-plus"></i>
    </a>
</div>
<?php $this->load->view('blocks/footer'); ?>