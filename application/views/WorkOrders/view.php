<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
    <?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-4">
    <div class="panel panel-default panel-primary">
        <div class="panel-body">
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
    <h1 class="text-center"><i class="glyphicon glyphicon-repeat"></i> Start here</h1>
    <h2 class="text-center">Begin by selecting a Work Order</h2>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <a href="<?php echo site_url('WorkOrders/add'); ?>" class="btn btn-primary">+</a>
        </div>
    </div>
</div>
<?php $this->load->view('blocks/footer'); ?>