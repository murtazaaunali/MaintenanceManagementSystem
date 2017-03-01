<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3>Add New Location</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                         <?php echo form_label('Name', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_input('Location_name', '', array('class' => 'form-control', 'placeholder' => 'Name of the Location*')) ?>
                    </div>
                        <div class="form-group">
                         <?php echo form_label('Address', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_input('Location_address', '', array('class' => 'form-control', 'placeholder' => 'Address of the Location*')) ?>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('blocks/footer'); ?>