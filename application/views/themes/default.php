<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="resource-type" content="document" />
        <meta name="robots" content="all, index, follow"/>
        <meta name="googlebot" content="all, index, follow" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/bootstrap-responsive.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/colorpicker.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/datepicker.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/uniform.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/select2.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/fullcalendar.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/matrix-style.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/matrix-media.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/bootstrap-wysihtml5.css'); ?>" />
        <link href="<?php echo site_url('assets/themes/default/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/jquery.gritter.css'); ?>" />
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <script src="<?php echo site_url('assets/themes/default/js/excanvas.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.ui.custom.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap-colorpicker.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap-datepicker.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/query.toggle.buttons.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/Chart.bundle.js'); ?>"></script> 
    </head>
    <body>

        <!--Header-part-->
        <div id="header">
            <h1><a href="dashboard.html">Matrix Admin</a></h1>
        </div>
        <!--close-Header-part--> 


        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                        <li class="divider"></li>
                        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                    </ul>
                </li>
                <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
        <!--close-top-Header-menu-->
        <!--start-top-serch-->
        <div id="search">
            <input type="text" placeholder="Search here..."/>
            <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </div>
        <!--close-top-serch-->
        <!--sidebar-menu-->
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
            <ul>
                <li <?php if ($this->uri->segment(1) == 'Inquiries') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Inquiries'); ?>"><i class="icon icon-info-sign"></i> <span>Inquiries</span></a> </li>
                <li <?php if ($this->uri->segment(1) == 'WorkOrders') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/WorkOrders'); ?>"><i class="icon icon-wrench"></i> <span>Work Orders</span></a> </li>
                <li <?php if ($this->uri->segment(1) == 'Dashboard') { ?> class="active" <?php } ?>> <a href="<?php echo site_url('/Dashboard'); ?>"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
                <li <?php if ($this->uri->segment(1) == 'Requests') { ?> class="active" <?php } ?>> <a href="<?php echo site_url('/Requests'); ?>"><i class="icon icon-reply"></i> <span>Requests</span></a> </li>
                <li <?php if ($this->uri->segment(1) == 'Locations') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Locations'); ?>"><i class="icon icon-pushpin"></i> <span>Locations</span></a></li>
                <li <?php if ($this->uri->segment(1) == 'Employees') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Employees'); ?>"><i class="icon icon-user"></i> <span>Employees</span></a></li>
                <li <?php if ($this->uri->segment(1) == 'Teams') { ?> class="active" <?php } ?>><a href="<?php echo site_url('/Teams'); ?>"><i class="icon icon-group"></i> <span>Teams</span></a></li>
            </ul>
        </div>
        <!--sidebar-menu-->
        <!--main-container-part-->
        <div id="content">
            <!--breadcrumbs-->
            <div id="content-header">
                <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
            </div>
            <!--End-breadcrumbs-->
            <div class="container-fluid">
                <?php echo $output; ?>
            </div>
        </div>

        <!--end-main-container-part-->

        <!--Footer-part-->

        <div class="row-fluid">
            <div id="footer" class="span12"> <?php echo date('Y'); ?> &copy; Primo Maintenance Management System. Designed and Developed by <a href="http://gobrig.com">GoBrig</a> </div>
        </div>

        <!--end-Footer-part-->



        <script src="<?php echo site_url('assets/themes/default/js/jquery.flot.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.flot.resize.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.peity.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/fullcalendar.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.dashboard.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.gritter.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.interface.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.chat.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.validate.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.form_validation.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.wizard.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.uniform.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/select2.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.popover.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.dataTables.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.tables.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.form_common.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/wysihtml5-0.3.0.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.peity.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap-wysihtml5.js'); ?>"></script> 

        <script type="text/javascript">
            // This function is called from the pop-up menus to transfer to
            // a different page. Ignore if the value returned is a null string:
            function goPage(newURL) {

                // if url is empty, skip the menu dividers and reset the menu selection to default
                if (newURL != "") {

                    // if url is "-", it is this page -- reset the menu:
                    if (newURL == "-") {
                        resetMenu();
                    }
                    // else, send page to designated URL            
                    else {
                        document.location.href = newURL;
                    }
                }
            }

            // resets the menu selection upon entry to this page:
            function resetMenu() {
                document.gomenu.selector.selectedIndex = 2;
            }
        </script>
    </body>
</html>
