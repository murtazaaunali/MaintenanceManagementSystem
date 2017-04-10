<div class="row-fluid">
     <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Teams</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($Teams as $team): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Teams/edit/' . $team->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><?php echo $team->name; ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="no-task-open">
            <img src="<?php echo site_url('/assets/themes/default/img/arrow.svg'); ?>" class="center" alt="begin" />
            <h1>Start here</h1>
            <h2 class="text-center">Begin by selecting a Work Order</h2>
        </div>
        <a href="<?php echo site_url('/Teams/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>
    </div>
</div>
