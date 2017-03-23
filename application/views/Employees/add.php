

<div class="span12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3>Add New People</h3>
            <div class="row-fluid">
                <div class="span12">
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
                                <?php echo form_label('First Name', '', array('class' => 'control-label')); ?>
                                <div class="form-group">
                                    <?php echo form_input('First_Name', '', array('class' => 'form-control', 'placeholder' => 'First Name*')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Last Name', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_Input('Last_name', '', array('class' => 'form-control', 'placeholder' => 'Last Name*')) ?>
                                    </div>
                                    <div class="form-group">
                                    <?php echo form_label('Job Tittle', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_Input('Job_tittle', '', array('class' => 'form-control', 'placeholder' => 'e.g Sales Manager*')) ?>
                                    </div>
                                    <div class="form-group">
                                    <?php echo form_label('Phone Number', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_input('Phone_number', '', array('class' => 'form-control', 'placeholder' => 'e.g +971 4 xxxxxxx*')) ?>
                                    </div>
                                          <div class="form-group">
                                    <?php echo form_label('Company Name', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_input('Company_name', '', array('class' => 'form-control', 'placeholder' => 'Company Name*')) ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                