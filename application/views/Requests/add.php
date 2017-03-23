

<div class="span12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4>Submit a request</h4>
            <div class="row-fluid">
                <div class="span12">
                    <?php echo form_label('Request Info', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_input('Request_info', '', array('class' => 'form-control', 'placeholder' => 'Request Tittle*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('reques_description', '', array('class' => 'form-control', 'placeholder' => 'Detailed description', 'row-fluids' => '3')); ?>
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
                        <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
