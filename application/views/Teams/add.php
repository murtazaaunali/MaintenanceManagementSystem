<div class="row-fluid">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Add New Team</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <?php echo form_open(); ?>
                            <div class="span12">
                                <div class="form-group">
                                    <?php echo form_label('Team Name', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_input('team_name', '', array('class' => 'span12', 'placeholder' => 'Maintenance Team 1*')); ?>
                                    </div>

                                    <?php echo form_label('Team Description', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_textarea('team_description', '', array('class' => 'span12', 'placeholder' => 'Team Description*')); ?>
                                    </div>
                                    <br>
                                    <div class="control-group">
                                        <label class="control-label">Select Employees</label>
                                        <div class="controls">

                                            <?php echo form_dropdown('team_employee[]', $team_Employees, FALSE, array('class' => 'span12', 'multiple' => 'multiple')); ?>

                                        </div>
                                    </div>
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
        </div>
    </div>
</div>
