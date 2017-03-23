<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Work Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($workorders as $workorder): ?>
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
                                <div class="fr"><a href="<?php echo site_url('WorkOrders/view/' . $workorder->id); ?>" class="btn btn-default btn-mini">View</a> <a href="<?php echo site_url('WorkOrders/edit/' . $workorder->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                                <span class="user-info"> #<?php echo $workorder->id; ?> By: john Deo / <?php echo $workorder->date_created; ?> </span>
                                <p><a href="<?php echo site_url('WorkOrders/view/' . $workorder->id); ?>"><?php echo substr($workorder->title, 0, 85); ?>...</a> </p>
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
            <h2 class="text-center">Begin by selecting a Work Order</h2>
        </div>
        <a href="<?php echo site_url('/WorkOrders/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>
    </div>
</div>
