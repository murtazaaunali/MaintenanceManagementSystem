<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Employees</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($Employees as $employee): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Employees/edit/' . $employee->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><a href="<?php echo site_url('Employees/edit/' . $employee->id); ?>"><?php echo substr($employee->first_name, 0, 85); ?>...</a> </p>
                        </div>
                    </li>
                <?php endforeach; ?>
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
                        <?php echo form_open(); ?>
                        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
                        <div class="form-group">
                            <?php echo form_label('Email', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('email', set_value('email', $employees->email), array('class' => 'span12', 'readonly' => 'readonly', 'placeholder' => 'abc@example.com(will also be the username)*')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Password', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_password('password', '', array('class' => 'span12', 'placeholder' => 'Type password to change current password')); ?>
                            </div>

                            <label class="control-label">User Account Type</label>
                            <?php echo form_dropdown('employee_type', array('1' => 'Admin', '2' => 'Employee', '3' => 'Manager'), set_value('employee_type', $this->ion_auth->get_users_groups($user->id)->result()), array('class' => 'span12')); ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_label('First Name', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('first_name', set_value('first_name', $employees->first_name), array('class' => 'span12', 'placeholder' => 'First Name*')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Last Name', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_Input('last_name', set_value('last_name', $employees->last_name), array('class' => 'span12', 'placeholder' => 'Last Name*')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Job Tittle', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_Input('job_title', set_value('job_title', $employees->job_title), array('class' => 'span12', 'placeholder' => 'e.g Sales Manager*')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Phone Number', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('phone_number', set_value('phone_number', $employees->phone_number), array('class' => 'span12', 'placeholder' => 'e.g +971 4 xxxxxxx*')) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Company Name', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('company_name', set_value('company_name', $employees->company_name), array('class' => 'span12', 'placeholder' => 'Company Name*')) ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Employee Status', 'status', array('class' => 'control-label')); ?>
                        </div>
                        <label class="switch">
                            <input type="checkbox" name="status" value="1"  <?php if ($employees->status == 1) : ?>checked <?php endif; ?>>
                            <div class="slider round"></div>
                        </label>
                        <div class="form-group">
                            <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>