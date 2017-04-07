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
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/matrix-login.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/bootstrap-datepicker.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/select2.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/matrix-style.css'); ?>" />
        <link rel="stylesheet" href="<?php echo site_url('assets/themes/default/css/matrix-media.css'); ?>" />
        <link href="<?php echo site_url('assets/themes/default/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <script src="<?php echo site_url('assets/themes/default/js/jquery.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.ui.custom.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/bootstrap-datepicker.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/select2.full.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/Chart.bundle.js'); ?>"></script> 
    </head>
    <body>
        <div id="loginbox">            
            <?php echo $output; ?>
        </div>
        <script src="<?php echo site_url('assets/themes/default/js/matrix.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/jquery.min.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.login.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.dashboard.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.interface.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.js'); ?>"></script> 
        <script src="<?php echo site_url('assets/themes/default/js/matrix.form_common.js'); ?>"></script> 

    </body>
</html>
