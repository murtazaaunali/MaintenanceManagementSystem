<div id="loginbox">
    <?php echo form_open("auth/forgot_password", array("class" => "form-vertical", "id" => "loginform")); ?>
    <div class="control-group normal_text">
        <h3><img src="../../../assets/themes/default/img/logo.png" alt="Primo CMMS" /></h3>
        <h1><?php echo lang('forgot_password_heading'); ?></h1>
    </div>
    <div class="span12">
        <div id="infoMessage"><?php echo $message; ?></div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                <?php echo form_input($identity, '', array('placeholder' => 'Username')); ?>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-right">
            <?php echo form_submit('submit', lang('forgot_password_submit_btn'), array('class' => 'btn btn-success')); ?>
        </span>
    </div>
    <?php echo form_close(); ?>
</div>