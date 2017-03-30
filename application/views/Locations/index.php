<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Locations</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($locations as $location): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Locations/edit/' . $location->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><?php echo $location->name; ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
</div>
<a href="<?php echo site_url('/Locations/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>
</div>
</div>