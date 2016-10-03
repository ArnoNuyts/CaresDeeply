<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => "form-control"
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login*';
} else if ($login_by_username) {
	$login_label = 'Login*';
} else {
	$login_label = 'Email*';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => "form-control"
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
	'class' => 'form-control checkbox'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class' => "form-control"
);
?>

<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2"'); ?>
	<div class="panel panel-default" style="color: black;">
	  <div class="panel-heading">
		<h3 class="panel-title">Login</h3>
	  </div>
	  <div class="panel-body">
			
			<div class="form-group">
				<?php echo form_label($login_label, $login['id'], array('class' =>'col-sm-3 col-sm-offset-2 control-label')); ?>
				<div class="col-sm-5">
					<?php echo form_input($login); ?>
				</div>
				
				<?php if(form_error($login['name']) != ""): ?>
					<div class="alert alert-danger col-sm-8 col-sm-offset-2" style="clear:both; margin-top: 15px;">
						<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo form_label('Password', $password['id'], array('class' =>'col-sm-3 col-sm-offset-2 control-label')); ?>
				<div class="col-sm-5">
					<?php echo form_password($password); ?>
				</div>
				<?php if(form_error($password['name']) != "" OR isset($errors[$password['name']])): ?>
					<div class="alert alert-danger col-sm-8 col-sm-offset-2" style="clear:both; margin-top: 15px;">
						<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ($show_captcha) {
				if ($use_recaptcha) { ?>
			<tr>
				<td colspan="2">
					<div id="recaptcha_image"></div>
				</td>
				<td>
					<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
					<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
					<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="recaptcha_only_if_image">Enter the words above</div>
					<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
				</td>
				<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
				<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
				<?php echo $recaptcha_html; ?>
			</tr>
			<?php } else { ?>
			<div class="form-group">
					<label class="control-label col-sm-3 col-sm-offset-2">Enter the code exactly as it appears:</label>
					<div class="col-sm-5 col-sm-offset">
						<?php echo $captcha_html; ?>
					</div>
				
			</div>
			<div class="form-group">
				<?php echo form_label('Confirmation Code', $captcha['id'], array('class' =>'col-sm-3 col-sm-offset-2 control-label')); ?>
				<div class="col-sm-5">
					<?php echo form_input($captcha); ?>
				</div>
				<?php if(form_error($captcha['name']) != ''): ?>
					<div class="alert alert-danger col-sm-8 col-sm-offset-2" style="clear:both; margin-top: 15px;">
						<?php echo form_error($captcha['name']); ?>
					</div>
				<?php endif; ?>
			</div>
			<?php }
			} ?>

			<div class="form-group">
					
					<?php echo form_label('Remember me', $remember['id'], array('class' =>'col-sm-3 col-xs-6 col-sm-offset-2 control-label')); ?>
					<div class="col-sm-1  col-xs-6">
						<?php echo form_checkbox($remember); ?>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
					<?php echo form_submit('submit', 'Let me in', 'class="form-control btn btn-default"'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-3 col-sm-offset-2" style="text-align: right">
				<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?><br />
				<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
				</div>
				
			</div>
		</div>
	</div>
<?php echo form_close(); ?>