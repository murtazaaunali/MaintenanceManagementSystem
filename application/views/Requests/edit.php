<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Requests</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($Requests as $request): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Requests/edit/' . $request->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><a href="<?php echo site_url('Requests/edit/' . $request->id); ?>"><?php echo substr($request->title, 0, 85); ?>...</a> </p>
                        </div>
                    </li>
                <?php endforeach; ?>
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
                        <?php echo form_open(); ?>
                        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
                        <div class="form-group">
                            <h4 class="control-label">Work Request Info</h4>
                            <?php echo form_input('request_title', set_value('request_title', $request->title), array('class' => 'span12', 'placeholder' => 'Request title*')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_textarea('request_description', set_value('request_description', $request->description), array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3')); ?>
                        </div>
                        <?php echo form_label('Set Priority', 'request_priority', array('class' => 'control-label')); ?>
                        <div class="form-group">
                            <label class="radio-inline">
                                <?php echo form_radio('request_priority', '0', FALSE); ?> None
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('request_priority', '1', FALSE); ?> Low
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('request_priority', '2', FALSE); ?> Medium
                            </label>
                            <label class="radio-inline">
                                <?php echo form_radio('request_priority', '3', FALSE); ?> High
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label">Select Workorder</label>
                                <?php echo form_dropdown('request_workorder_name', $request_Workorders, FALSE, array('class' => 'span12')); ?>
                            </div>
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