<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Customers</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($locations as $location): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Locations/edit/' . $location->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><a href="<?php echo site_url('Locations/edit/' . $location->id); ?>"><?php echo substr($location->name, 0, 85); ?>...</a> </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<a href="<?php echo site_url('/Locations/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>
</div>