<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Requests</h5>
            </div>
            <ul class="recent-posts">
                <li>
                    <div class="article-post">
                        <div class="fr"><a href="<?php echo site_url('Requests/edit/'); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                        <p> Testing</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="span6">
   <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Edit Profiles</h5>
            </div>
       <div class="widget-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="form-group">
                        <?php echo form_label('Email', '', array('class' => 'control-label')); ?>
                        <div class="form-group">
                            <?php echo form_input('email', '', array('class' => 'span12', 'placeholder' => 'abc@example.com(will also be the username)*')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Password', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_password('password', '', array('class' => 'span12', 'placeholder' => 'Password*')) ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('User Account Type', 'workorder_priority', array('class' => 'control-label')); ?>
                                <?php echo form_dropdown('employee_type', array('Select type', 'Admin', 'Manager', 'Employee'), FALSE, array('class' => 'span12')) ?>
                            </div>   
                            <div class="form-group">
                                <?php echo form_label('First Name', '', array('class' => 'control-label')); ?>
                                <div class="form-group">
                                    <?php echo form_input('First_Name', '', array('class' => 'span12', 'placeholder' => 'First Name*')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Last Name', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_Input('Last_name', '', array('class' => 'span12', 'placeholder' => 'Last Name*')) ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Job Tittle', '', array('class' => 'control-label')); ?>
                                        <div class="form-group">
                                            <?php echo form_Input('Job_tittle', '', array('class' => 'span12', 'placeholder' => 'e.g Sales Manager*')) ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Phone Number', '', array('class' => 'control-label')); ?>
                                            <div class="form-group">
                                                <?php echo form_input('Phone_number', '', array('class' => 'span12', 'placeholder' => 'e.g +971 4 xxxxxxx*')) ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo form_label('Company Name', '', array('class' => 'control-label')); ?>
                                                <div class="form-group">
                                                    <?php echo form_input('Company_name', '', array('class' => 'span12', 'placeholder' => 'Company Name*')) ?>
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
