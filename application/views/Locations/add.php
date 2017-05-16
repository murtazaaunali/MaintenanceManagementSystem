<div class="row-fluid">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Add New Customers</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <?php echo form_open(); ?>
                    <div class="span12">
                        <div class="form-group">
                            <?php echo form_label('Name', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('Location_name', '', array('class' => 'span12', 'placeholder' => 'Name of the Location*' ,'required'=>'required')) ?>
                            </div>

                            <?php echo form_label('Address', '', array('class' => 'control-label' )); ?>
                            <div class="form-group">
                                <?php echo form_input('Location_address', '', array('class' => 'span12', 'placeholder' => 'Address of the Location*' ,'required'=>'required')) ?>
                            </div>
                            <?php echo form_label('makani Number', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('makani_no', '', array('class' => 'span12', 'placeholder' => 'Makani No.*' ,'required'=>'required')) ?>
                            </div>
                             <?php echo form_label('Contact Number', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('contact_number', '', array('class' => 'span12', 'placeholder' => '+971-xxxxxxxxx*' ,'required'=>'required')) ?>
                            </div>
                            <?php echo form_label('Nationality', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('nationality', '', array('class' => 'span12', 'placeholder' => 'Nationality*' ,'required'=>'required')) ?>
                            </div>
                            <?php echo form_label('Email', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('email', '', array('class' => 'span12', 'placeholder' => 'abc@example.com*' ,'required'=>'required')) ?>
                            </div>

                            <div class="form-block">
                                <input type="checkbox" ng-model="showGoogleMap" class="iswitch iswitch-secondary ng-valid ng-dirty ng-valid-parse ng-not-modified ng-touched" ng-change="toggleMap(event)" id="if-map">
                                <label id="if-map" class="top-fix ng-scope" translate="">Include Map Coordinates for Location</label>
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