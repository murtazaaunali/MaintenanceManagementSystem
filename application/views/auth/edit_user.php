<div class="row-fluid">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5><?php echo lang('edit_user_heading'); ?></h5>
            </div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <?php echo form_open(uri_string()); ?>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_fname_label', 'first_name'), 'first_name', array('class' => 'control-label')); ?>
                            <?php echo form_input($first_name, '', array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_lname_label', 'last_name'), 'last_name', array('class' => 'control-label')); ?>
                            <?php echo form_input($last_name, '', array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_company_label', 'company'), 'company', array('class' => 'control-label')); ?>
                            <?php echo form_input($company, '', array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_phone_label', 'phone'), 'phone', array('class' => 'control-label')); ?>
                            <?php echo form_input($phone, '', array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_password_label', 'password'), 'password', array('class' => 'control-label')); ?>
                            <?php echo form_input($password, '', array('class' => 'span12')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label(lang('edit_user_password_confirm_label', 'password_confirm'), 'password_confirm', array('class' => 'control-label')); ?>
                            <?php echo form_input($password_confirm, '', array('class' => 'span12')); ?>
                        </div>
                        <?php if ($this->ion_auth->is_admin()): ?>
                            <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                            <?php foreach ($groups as $group): ?>
                                <label class="checkbox">
                                    <?php
                                    $gID = $group['id'];
                                    $checked = null;
                                    $item = null;
                                    foreach ($currentGroups as $grp) {
                                        if ($gID == $grp->id) {
                                            $checked = ' checked="checked"';
                                            break;
                                        }
                                    }
                                    ?>
                                    <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                                    <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </label>
                            <?php endforeach ?>
                        <?php endif ?>
                        <?php echo form_hidden('id', $user->id); ?>
                        <?php echo form_hidden($csrf); ?>
                        <div class="form-group">
                            <?php echo form_submit("submit", lang('edit_user_submit_btn'), array('class' => 'btn btn-primary pull-right')); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>