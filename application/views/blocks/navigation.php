<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
    <ul>
        <li <?php if ($this->uri->segment(1) == 'Inquiries') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Inquiries'); ?>"><i class="icon icon-home"></i> <span>Inquiries</span></a> </li>
        <li <?php if ($this->uri->segment(1) == 'WorkOrders') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/WorkOrders'); ?>"><i class="icon icon-home"></i> <span>Work Orders</span></a> </li>
        <li <?php if ($this->uri->segment(1) == 'Dashboard') { ?> class="active" <?php } ?>> <a href="<?php echo site_url('/Dashboard'); ?>"><i class="icon icon-signal"></i> <span>Dashboard</span></a> </li>
        <li <?php if ($this->uri->segment(1) == 'Requests') { ?> class="active" <?php } ?>> <a href="<?php echo site_url('/Requests'); ?>"><i class="icon icon-inbox"></i> <span>Requests</span></a> </li>
        <li <?php if ($this->uri->segment(1) == 'Locations') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Locations'); ?>"><i class="icon icon-th"></i> <span>Locations</span></a></li>
        <li <?php if ($this->uri->segment(1) == 'Employees') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Employees'); ?>"><i class="icon icon-fullscreen"></i> <span>Employees</span></a></li>
        <li <?php if ($this->uri->segment(1) == 'Teams') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Teams'); ?>"><i class="icon icon-fullscreen"></i> <span>Teams</span></a></li>
    </ul>
</div>
<!--sidebar-menu-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">