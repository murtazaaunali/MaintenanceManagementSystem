<?php $this->load->view('blocks/header'); ?>
<?php $this->load->view('blocks/navigation'); ?><?php $this->load->view('blocks/top-navigation'); ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="col-md-12">
                    <h4>Add New Location</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo form_label('Name', '', array('class' => 'control-label')); ?>
                                <div class="form-group">
                                    <?php echo form_input('Location_name', '', array('class' => 'form-control', 'placeholder' => 'Name of the Location*')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Address', '', array('class' => 'control-label')); ?>
                                    <div class="form-group">
                                        <?php echo form_input('Location_address', '', array('class' => 'form-control', 'placeholder' => 'Address of the Location*')) ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-block">
                                            <input type="checkbox" ng-model="showGoogleMap" class="iswitch iswitch-secondary ng-valid ng-dirty ng-valid-parse ng-not-modified ng-touched" ng-change="toggleMap(event)" id="if-map">
                                            <label id="if-map" class="top-fix ng-scope" translate="">Include Map Coordinates for Location</label>
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
<?php $this->load->view('blocks/footer'); ?>