<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Teams</h5>
            </div>
            <ul class="recent-posts">
                <li>
                    <div class="article-post">
                        <div class="fr"><a href="<?php echo site_url('Teams/edit/'); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                        <p> Testing</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Edit Teams</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="form-group">
                                    <?php echo form_label('Team Name', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_input('Team_name', '', array('class' => 'span12', 'placeholder' => 'Maintenance Team 1*')) ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('Team Description', '', array('class' => 'control-label')); ?>
                                        <div class="form-group">
                                            <?php echo form_textarea('Team_Description', '', array('class' => 'span12', 'placeholder' => 'Team Description*')) ?>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Select Employees</label>
                                            <div class="controls">
                                                <select multiple >
                                                    <option>First option</option>
                                                    <option selected>Second option</option>
                                                    <option>Third option</option>
                                                    <option>Fourth option</option>
                                                    <option>Fifth option</option>
                                                    <option>Sixth option</option>
                                                    <option>Seventh option</option>
                                                    <option>Eighth option</option>
                                                </select>
                                            </div>
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
