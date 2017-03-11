<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?><?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-6">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul class="timeline list-unstyled">
                        <li class="timeline-item first-item">
                            <ul class="list-unstyled tasks-list">
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="task-item show-pointer active">
                                    <div class="task-item-container task-open">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="media-heading">
                                                    Testing testing...
                                                </h2>
                                            </div>
                                            <div class="media-right">
                                                <div class="task-status-box">
                                                    <a href="<?php echo site_url('Employees/edit'); ?>">
                                                        <span class="status-circle task-open"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h3>Edit Profiles</h3>
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
<?php $this->load->view('blocks/footer'); ?>