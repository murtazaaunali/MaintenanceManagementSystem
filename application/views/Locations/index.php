<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="container-fluid">
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-primary">
                            <div class="panel-body">
                                <div class="row page-sub-option alternate">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-primary">
                            <div class="panel-body">
                                <div class="col-md-9">
                                    Panel content 2
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="options-right">
                                    <a ui-sref="" href="#/app/locations/update">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <a href="<?php echo site_url('/Locations/add'); ?>" class="btn paper-button paper-floating-action-button">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </div>
                <?php $this->load->view('blocks/footer'); ?>