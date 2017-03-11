<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('WorkOrders'); ?>"><img src="<?php echo site_url('public/img/Primo_MMS_Logo.png'); ?>" class="img-responsive" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if($this->uri->segment(1) == 'WorkOrders') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('WorkOrders'); ?>">Work Orders</a>
                </li>
                <li <?php if($this->uri->segment(1) == 'Dashboard') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Dashboard'); ?>">Dashboard</a>
                </li>
                <li <?php if($this->uri->segment(1) == 'Requests') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Requests'); ?>">Requests</a>
                </li>
                <li <?php if($this->uri->segment(1) == 'Locations') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Locations'); ?>">Locations</a>
                </li>
                <li <?php if($this->uri->segment(1) == 'Employees') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Employees'); ?>">Employees</a>
                </li>
                <li <?php if($this->uri->segment(1) == 'Teams') {?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Teams'); ?>">Teams</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main">