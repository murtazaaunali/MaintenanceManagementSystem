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
                            <?php echo form_input('request_title', set_value('request_title', $Request->title), array('class' => 'span12', 'placeholder' => 'Request title*','required'=>'required')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_textarea('request_description', set_value('request_description', $Request->description), array('class' => 'span12', 'placeholder' => 'Detailed description', 'rows' => '3','required'=>'required')); ?>
                        </div>
                        <?php echo form_label('Set Priority', 'request_priority', array('class' => 'control-label')); ?>
                       <div class="controls">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="request_priority" id="request_priority" value="1" <?php
                                        if ($Request->priority == 0): echo "checked";
                                        endif;
                                        ?>>
                                         </label>
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="request_priority" id="request_priority" value="1" <?php
                                        if ($Request->priority == 1): echo "checked";
                                        endif;
                                        ?>>
                                        ! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="request_priority" id="request_priority" value="2" <?php
                                        if ($Request->priority == 2): echo "checked";
                                        endif;
                                        ?>>
                                        !! </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="request_priority" id="request_priority" value="3" <?php
                                        if ($Request->priority == 3): echo "checked";
                                        endif;
                                        ?>>
                                        !!! </label>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label">Select Workorder</label>
                                <?php echo form_dropdown('request_workorder_name', $request_Workorders,set_value('request_workorder', $Request->workorder_name), FALSE, array('class' => 'span12')); ?>
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