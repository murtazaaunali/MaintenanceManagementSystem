<div class="row-fluid">
    <div class="span12">
   <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Submit a request</h5>
            </div>
            <div class="widget-content">
            <div class="row-fluid">
                <?php echo form_open(); ?>
                <div class="span12">
                    <?php echo form_label('Request Info', '', array('class' => 'control-label')); ?>
                    <div class="form-group">
                        <?php echo form_input('Request_info', '', array('class' => 'span12', 'placeholder' => 'Request Tittle*')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_textarea('reques_description', '', array('class' => 'span12', 'placeholder' => 'Detailed description', 'row-fluids' => '3')); ?>
                    </div>
                    <br>
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
                    <br>
                    <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Select Workorder</label>
              <div class="controls">
                  <select class="span12" >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
                    </form>
                    <div class="form-group">
                        <?php echo form_submit("Save", "Save", array('class' => 'btn btn-primary pull-right')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>