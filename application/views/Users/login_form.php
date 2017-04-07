<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!isset($optional_login)) {
    echo '<div class="control-group normal_text"> <h3><img src="..\assets\themes\default\img\logo.png" alt="Logo" /></h3></div>';
}

if (!isset($on_hold_message)) {
    if (isset($login_error_mesg)) {
        echo '
            <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Error!</h4>
              <p>Login Error #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password.</p>
              <p>Username, email address and password are all case sensitive.</p>  
            </div>';
    }

    if ($this->input->get('logout')) {
        echo '
            <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">You have successfully logged out.</h4>
            </div>';
    }
    ?>
    <?php
    echo form_open($login_url, ['class' => 'form-vertical', 'id' => 'loginform']);
    ?>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="login_string" id="login_string" placeholder="Username" />
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="login_pass" id="login_pass" placeholder="Password" <?php
                if (config_item('max_chars_for_password') > 0)
                    echo 'maxlength="' . config_item('max_chars_for_password') . '"';
                ?> autocomplete="off" readonly="readonly" onfocus="this.removeAttribute('readonly');" />
            </div>
        </div>
    </div>
    <?php
    if (config_item('allow_remember_me')) {
        ?>

        <br />
        <div class="control-group">
            <div class="controls">
                <label for="remember_me" class="form_label">Remember Me</label>
                <input type="checkbox" id="remember_me" name="remember_me" value="yes" />
            </div>
        </div>

        <?php
    }
    ?>

    <p>
        <?php
        $link_protocol = USE_SSL ? 'https' : NULL;
        ?>
        <a href="<?php echo site_url('examples/recover', $link_protocol); ?>">
            Can't access your account?
        </a>
    </p>


    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
        <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span>
    </div>

    </div>
    </form>

    <?php
} else {
    // EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
    echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the <a href="/examples/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
}

/* End of file login_form.php */
/* Location: /community_auth/views/examples/login_form.php */ 