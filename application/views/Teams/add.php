

<div class="span12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="span12">
                    <h4>Add New Team</h4>
                    <div class="row-fluid">
                        <div class="span12">
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
