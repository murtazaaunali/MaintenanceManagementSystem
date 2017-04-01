<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Employees</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($employees as $employee): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Employees/edit/' . $employee->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><a href="<?php echo site_url('Employees/edit/' . $employee->id); ?>"><?php echo substr($employee->first_name, 0, 85); ?>...</a> </p>
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
        <a href="<?php echo site_url('/Employees/add'); ?>" class="paper-button paper-floating-action-button"><i class="icon-plus"></i></a>
    </div>
</div>
