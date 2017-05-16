<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Customers</h5>
            </div>
            <ul class="recent-posts">
                <?php foreach ($Locations as $location): ?>
                    <li>
                        <div class="article-post">
                            <div class="fr"><a href="<?php echo site_url('Locations/edit/' . $location->id); ?>" class="btn btn-primary btn-mini">Edit</a></div>
                            <p><a href="<?php echo site_url('Locations/edit/' . $location->id); ?>"><?php echo substr($location->name, 0, 85); ?>...</a> </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Edit Locations</h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <?php echo form_open(); ?>
                        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
                        <div class="form-group">
                            <?php echo form_label('Name', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('location_name', set_value('location_name', $Location->name), array('class' => 'span12', 'placeholder' => 'Name of the Location*' ,'required'=>'required')) ?>
                            </div>
                        </div>
                            <?php echo form_label('Address', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('location_address', set_value('location_address', $Location->address), array('class' => 'span12', 'placeholder' => 'Address of the Location*' ,'required'=>'required')) ?>
                            </div>
                        <?php echo form_label('makani Number', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('makani_no', set_value('makani_no', $Location->makani_no), array('class' => 'span12', 'placeholder' => 'Makani No.*' ,'required'=>'required')) ?>
                            </div>
                            <?php echo form_label('Contact Number', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('contact_number', set_value('contact_number', $Location->contact_number), array('class' => 'span12', 'placeholder' => '+971-xxxxxxxxx*','required'=>'required')) ?>
                            </div>
                            <?php echo form_label('Nationality', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('nationality', set_value('nationality', $Location->nationality), array('class' => 'span12', 'placeholder' => 'Nationality*','required'=>'required')) ?>
                            </div>
                            <?php echo form_label('Email', '', array('class' => 'control-label')); ?>
                            <div class="form-group">
                                <?php echo form_input('email', set_value('email', $Location->email), array('class' => 'span12', 'placeholder' => 'abc@example.com*','required'=>'required')) ?>
                            </div>

                            <div class="form-block">
                                <input type="checkbox" ng-model="showGoogleMap" class="iswitch iswitch-secondary ng-valid ng-dirty ng-valid-parse ng-not-modified ng-touched" ng-change="toggleMap(event)" id="if-map">
                                <label id="if-map" class="top-fix ng-scope" translate="">Include Map Coordinates for Location</label>
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

