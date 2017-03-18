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
    <h1 class="text-center"><i class="fa fa-repeat"></i> Start here</h1>
    <h2 class="text-center">Begin by selecting a Inquiry</h2>

</div>
<?php $this->load->view('blocks/footer'); ?>
