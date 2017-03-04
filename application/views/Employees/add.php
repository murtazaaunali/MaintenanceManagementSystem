<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?>
<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3>Add New People</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                         <?php echo form_label('Email', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_input('email', '', array('class' => 'form-control', 'placeholder' => 'abc@example.com(will also be the username)*')) ?>
                    </div>
                        <div class="form-group">
                         <?php echo form_label('Password', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_password('password', '', array('class' => 'form-control', 'placeholder' => 'Password*')) ?>
                    </div>
                  <div class="form-group">
                        <?php echo form_label('User Account Type', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_dropdown('employee_type', array('Select type', 'Admin', 'Manager', 'Employee'), FALSE, array('class' => 'form-control')) ?>
                    </div>   
                             <div class="form-group">
                        <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                    </div>
                            
                </div>
            </div>
        </div>
                <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('blocks/footer'); ?>