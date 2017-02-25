<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Add New Location</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo form_label('Name', '', array('class' => 'control-label')); ?>
                        <?php echo form_input('Name', '', array('class' => 'form-control', 'placeholder' => 'name of location*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Address', '', array('class' => 'control-label')); ?>
                        <?php echo form_input('workorder_title', '', array('class' => 'form-control', 'placeholder' => 'Address of the location*')); ?>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('blocks/footer'); ?>