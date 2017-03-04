<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-4">
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            <a href="<?php echo site_url('Requests/edit'); ?>"</a>
            Panel content 1
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 2
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 3
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 4
        </div>
    </div>
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
            Panel content 5
        </div>
    </div>
</div>
<div class="col-md-5">

    <<h1 class="text-center"><i class="glyphicon glyphicon-repeat"></i> Start here</h1>
    <h2 class="text-center">Begin by selecting a Work Order</h2>
    <a href="<?php echo site_url('/Requests/add'); ?>" class="btn paper-button paper-floating-action-button">
        <i class="glyphicon glyphicon-plus"></i>
    </a>
</div>
<?php $this->load->view('blocks/footer'); ?>