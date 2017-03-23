<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Inquiries</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($inquiries as $inquiry): ?>
                        <li>
                            <?php
                            switch ($inquiry->status) {
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
                                <div class="fr"><a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>" class="btn btn-default btn-mini">View</a></div>
                                <span class="user-info"> #<?php echo $inquiry->id; ?> By: john Deo / <?php echo $inquiry->date_created; ?> Type: <?php echo $inquiry->type; ?> </span>
                                <p><?php echo substr($inquiry->address, 0, 85); ?>...</p>
                                <p><a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>"><?php echo substr($inquiry->comments, 0, 85); ?>...</a> </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="no-task-open">
            <img src="<?php echo site_url('/assets/themes/default/img/arrow.svg'); ?>" class="center" alt="begin" />
            <h1>Start here</h1>
            <h2 class="text-center">Begin by selecting an Inquiry</h2>
        </div>
    </div>
</div>
