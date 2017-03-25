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
                <h5>Assign Work Order Request</h5>
            </div>
       <div class="widget-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="form-group">
                        <h4 class="control-label">Work Request Info</h4>
                        <?php echo form_input('request_tittle', '', array('class' => 'span12', 'placeholder' => 'Request title*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('workorder_title', '', array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                    </div>
                    <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '0', FALSE); ?> None
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '1', FALSE); ?> Low
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '2', FALSE); ?> Medium
                        </label>
                        <label class="radio-inline">
                            <?php echo form_radio('workorder_priority', '3', FALSE); ?> High
                        </label>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_location', array('Select Location', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_dropdown('workorder_worker', array('Select Main Worker', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Assign Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_duedate', 'class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                        <?php echo form_input(array('type' => 'date', 'name' => 'workorder_end_duedate', 'class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                    </div>
                    <div class="form-group">
                            <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>