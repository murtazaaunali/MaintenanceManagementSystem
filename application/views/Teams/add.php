<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?><?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="col-md-12">
                    <h4>Add New Team</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo form_label('Team Name', '', array('class' => 'control-label')); ?>
                                <div class="form-group">
                                    <?php echo form_input('Team_name', '', array('class' => 'form-control', 'placeholder' => 'Maintenance Team 1*')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Team Description', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_textarea('Team_Description', '', array('class' => 'form-control', 'placeholder' => 'Team Description*')) ?>
                                    </div>
                                   
                                    <div class="form-group">
                                        <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                                    </div>

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