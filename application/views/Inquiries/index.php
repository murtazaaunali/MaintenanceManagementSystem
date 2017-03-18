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
                                <?php print_r($inquiries); ?>
                                <?php foreach ($inquiries as $inquiry): ?>
                                    <li class="task-item show-pointer">
                                        <a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>">
                                            <div class="task-item-container task-open">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h2 class="media-heading">
                                                            
                                                            <?php echo substr($inquiry->title, 0, 85); ?>...
                                                        </h2>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="task-status-box">
                                                            
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
