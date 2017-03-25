<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Work Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($Workorders as $workorder): ?>
                        <li>
                            <?php
                            switch ($workorder->status) {
                                case "0":
                                    echo '<span class="label label-important">Closed</span>';
                                    break;

                                case "1":
                                    echo '<span class="label label-success">Open</span>';
                                    break;

                                case "2":
                                    echo '<span class="label label-info">In progress</span>';
                                    break;

                                case "3":
                                    echo '<span class="label label-warning">On hold</span>';
                                    break;

                                default :
                                    echo "";
                            }
                            ?>                                
                            <div class="article-post">
                                <div class="fr"><a href="<?php echo site_url('WorkOrders/view/' . $workorder->id); ?>" class="btn btn-default btn-mini">View</a> <a href="<?php echo site_url('WorkOrders/edit/' . $workorder->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                                <span class="user-info"> #<?php echo $workorder->id; ?> By: john Deo / <?php echo $workorder->date_created; ?> </span>
                                <p><a href="<?php echo site_url('WorkOrders/edit/' . $workorder->id); ?>"><?php echo substr($workorder->title, 0, 85); ?>...</a> </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Edit Work Order</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <?php echo form_open(); ?>
                        <div class="form-group">
                            <h4 class="control-label">Work Order Info</h4>
                            <?php echo form_input('workorder_title', set_value('workorder_title', $Workorder->title), array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_textarea('workorder_description', set_value('workorder_description', $Workorder->description), array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                        </div>
                        <div class="control-group">
                            <?php echo form_label('Set Priority', 'workorder_priority', array('class' => 'control-label')); ?>
                            <div class="controls">
                                <div data-toggle="buttons-radio" class="btn-group">
                                    <button class="btn btn-large btn-danger <?php
                                    if ($Workorder->priority == 1): echo "active";
                                    endif;
                                    ?>" type="button" value="1">!</button>
                                    <button class="btn btn-large btn-danger <?php
                                    if ($Workorder->priority == 2): echo "active";
                                    endif;
                                    ?>" type="button" value="2">!!</button>
                                    <button class="btn btn-large btn-danger <?php
                                    if ($Workorder->priority == 3): echo "active";
                                    endif;
                                    ?>" type="button" value="3">!!!</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_location', array('Select Main Worker', '1' => 'Location1', '2' => 'Location2', '3' => 'Loacation3'), set_value('workorder_location', $Workorder->location_id), array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Staff', 'workorder_priority', array('class' => 'control-label')); ?>
                            <?php echo form_dropdown('workorder_worker', set_value('workorder_worker', $Workorder->category_id), TRUE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_team', array('Select Team', 'Location1', 'Location2', 'Loacation3'), FALSE, array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Assign Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                            <?php echo form_input(array('type' => 'date', 'name' => 'workorder_duedate', 'value' => set_value('workorder_duedate', $Workorder->start_date), 'class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('End Due Date', 'workorder_priority', array('class' => 'control-label')); ?>
                            <?php echo form_input(array('type' => 'date', 'name' => 'workorder_end_duedate', 'value' => set_value('workorder_end_duedate', $Workorder->end_date), 'class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_dropdown('workorder_repeating_schedule', array('Select Repeating Schedule', '1' => 'Daily', '2' => 'Week days', '3' => 'Every Week', '4' => 'Every Two Weeks', '5' => 'Every Month', '6' => 'Every Year'), set_value('workorder_repeating_schedule', $Workorder->repeating_schedule), array('class' => 'span12')) ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Requires Signature', 'workorder_requires_signature', array('class' => 'control-label')); ?>
                        </div>
                        <div class="form-group">
                            <label class="switch">
                                <input type="checkbox" name="workorder_requires_signature" <?php echo set_value('workorder_requires_signature', $Workorder->requires_sign) == 1 ? 'checked' : '' ?>>
                                <div class="slider round"></div>
                            </label>
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