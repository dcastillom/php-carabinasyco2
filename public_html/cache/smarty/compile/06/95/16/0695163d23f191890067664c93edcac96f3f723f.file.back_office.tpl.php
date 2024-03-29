<?php /* Smarty version Smarty-3.1.14, created on 2014-04-01 16:35:29
         compiled from "/home/carabina/public_html/modules/paypal/views/templates/admin/back_office.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214706693533aceb14219f3-59394782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0695163d23f191890067664c93edcac96f3f723f' => 
    array (
      0 => '/home/carabina/public_html/modules/paypal/views/templates/admin/back_office.tpl',
      1 => 1396362924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214706693533aceb14219f3-59394782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_logo' => 0,
    'PayPal_content' => 0,
    'PayPal_country' => 0,
    'Countries' => 0,
    'country' => 0,
    'PayPal_country_id' => 0,
    'PayPal_business' => 0,
    'PayPal_WPS' => 0,
    'PayPal_allowed_methods' => 0,
    'PayPal_HSS' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_ECS' => 0,
    'PayPal_api_username' => 0,
    'PayPal_api_password' => 0,
    'PayPal_api_signature' => 0,
    'PayPal_api_business_account' => 0,
    'PayPal_integral_evolution_solution' => 0,
    'PayPal_integral_evolution_template' => 0,
    'PayPal_express_checkout_shortcut' => 0,
    'PayPal_sandbox_mode' => 0,
    'PayPal_payment_capture' => 0,
    'PayPal_save_success' => 0,
    'PayPal_save_failure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_533aceb1864628_51552394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533aceb1864628_51552394')) {function content_533aceb1864628_51552394($_smarty_tpl) {?>

<div id="paypal-wrapper">

	

	<div class="box half left">
		<?php if (isset($_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalLogoLarge'])){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalLogoLarge'];?>
" alt="" style="margin-bottom: -5px" />
		<?php }?>
		<p id="paypal-slogan"><span class="dark"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['leader'];?>
</span> <span class="light"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['online_payment'];?>
</span></p>
		<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['tagline'];?>
</p>
	</div>

	<div class="box half right">
		<ul class="tick"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['benefits'];?>
</ul>
	</div>

	<div class="clear"></div><hr />

	<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="paypal_configuration">
		
		<div class="box">
			<div style="line-height: 18px;"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['expectations'];?>
</div>
			<div style="line-height: 20px; margin-top: 8px">
				<div>
					<label><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['your_country'];?>
 :
						<?php echo $_smarty_tpl->tpl_vars['PayPal_country']->value;?>
&nbsp;&nbsp;&nbsp;<a href="#" id="paypal_country_change" class="small"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['change_country'];?>
</a>
					</label>

					<div class="paypal-hide" id="paypal-country-form-content">
						<h3><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['country_change_title'];?>
 :</h3>

						<select name="paypal_country_default" id="paypal_country_default">
						<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country']==$_smarty_tpl->tpl_vars['PayPal_country_id']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
						<?php } ?>
						</select>

						<br />
						<br />
					</div>
				</div>

				<label><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['paypal_account'];?>
 ?</label>
				<input type="radio" name="business" id="paypal_business_account_no" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_business']->value==0){?>checked="checked"<?php }?> /> <label for="paypal_business_account_no"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['no'];?>
</label>
				<input type="radio" name="business" id="paypal_business_account_yes" value="1" style="margin-left: 14px" <?php if ($_smarty_tpl->tpl_vars['PayPal_business']->value==1){?>checked="checked"<?php }?> /> <label for="paypal_business_account_yes"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['yes'];?>
</label>
			</div>
		</div>

		<div class="clear"></div><hr />

		
		<div class="box">

			<div class="box right half" id="paypal-call-button">
				<div id="paypal-call" class="box right"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support_image'])){?><img src="../modules/paypal/img/<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['customer_support_image'];?>
.png" width="14px" alt="Phone" /><?php }?></div>
				<div id="paypal-call-foonote" class="box right clear"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['support_foonote'];?>
</div>
			</div>

			<span class="paypal-section">1</span> <h3 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['select_solution'];?>
</h3> <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['learn_more'];?>


			<br /><br /><br />

			<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_WPS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value)||in_array($_smarty_tpl->tpl_vars['PayPal_HSS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))){?>
				<h4 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sole_solution_section_title'];?>
</h4> <img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['BackOfficeCards'];?>
" height="22px"/>
				<div class="clear"></div>
				<div class="form-block">
					<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_WPS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))){?>
						
						<label for="paypal_payment_wps">
							<input type="radio" name="paypal_payment_method" id="paypal_payment_wps" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_WPS']->value){?>checked="checked"<?php }?> />
							<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_standard'];?>

							<br />
							<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_standard_tagline'];?>
</span>
						</label>
					<?php }?>

					<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_HSS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))){?>
						
						<br />
						<label for="paypal_payment_wpp">
							<input type="radio" name="paypal_payment_method" id="paypal_payment_wpp" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_HSS']->value){?>checked="checked"<?php }?> />
							<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro'];?>
<br />
							<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro_tagline'];?>
</span>
							<p class="toolbox"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['website_payment_pro_disclaimer'];?>
</p>
						</label>
					<?php }?>
				</div>
			<?php }?>

			<?php if ((in_array($_smarty_tpl->tpl_vars['PayPal_ECS']->value,$_smarty_tpl->tpl_vars['PayPal_allowed_methods']->value))){?>
			<h4 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['additional_solution_tagline'];?>
</h4> <img src="<?php echo $_smarty_tpl->tpl_vars['PayPal_logo']->value['LocalPayPalMarkSmall'];?>
" />
			<div class="form-block">
				
				<label for="paypal_payment_ecs">
					<input type="radio" name="paypal_payment_method" id="paypal_payment_ecs" value='<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_ECS']->value){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['choose'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout'];?>
<br />
					<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_tagline'];?>
</span>
				</label>
			</div>
			<?php }?>

			<hr />
		</div>

		
		<div class="box" id="account">

			<span class="paypal-section">2</span> <h3 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['account_section_title'];?>
</h3>

			<br /><br />

			<div id="signup">
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u1"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->signUpCallButton;?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u2"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->signUpCallButton;?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->signUpRedirectLink;?>
" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u3"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->signUpCallButton;?>
</a>

				
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->signUpRedirectLink;?>
#" target="_blank" class="paypal-button paypal-signup-button" id="paypal-signup-button-u5"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->signUpCallButton;?>
</a>
				

				<br /><br />

				
				<span class="paypal-signup-content" id="paypal-signup-content-u1"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u1']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u2"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u2']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u3"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u3']->content;?>
</span>

				
				<span class="paypal-signup-content" id="paypal-signup-content-u4"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u4']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u5"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u5']->content;?>
</span>
				<span class="paypal-signup-content" id="paypal-signup-content-u6"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['u6']->content;?>
</span>

			</div>

			<hr />

		</div>

		
		<div class="box disabled" id="credentials">
			<span class="paypal-section">3</span> <h3 class="inline"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_section_title'];?>
</h3>

			<br /><br />

			<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_tagline'];?>


			<div class="paypal-hide" id="configuration">
				

				<div id="standard-credentials">
					<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_description'];?>
</h4>

					<br />

					<a href="#" class="paypal-button" id="paypal-get-identification">
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_button'];?>
<p class="toolbox"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_button_disclaimer'];?>
</p>
					</a>

					<br /><br />

					<dl>
						<dt><label for="api_username"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_username'];?>
 : </label></dt>
						<dd><input type='text' name="api_username" id="api_username" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_username']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
						<dt><label for="api_password"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_password'];?>
 : </label></dt>
						<dd><input type='password' name="api_password" id="api_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_password']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
						<dt><label for="api_signature"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_signature'];?>
 : </label></dt>
						<dd><input type='text' name="api_signature" id="api_signature" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_signature']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
					</dl>
					<div class="clear"></div>
					<span class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_fields_disclaimer'];?>
</span>
				</div>


				<div id="integral-credentials" class="paypal-hide">
					<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_integral_description'];?>
</h4>

					<br />

					<dl>
						<dt><label for="api_business_account"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['credentials_business_email'];?>
 : </label></dt>
						<dd><input type='text' name="api_business_account" id="api_business_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_api_business_account']->value, ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" /></dd>
					</dl>
				</div>

				<div class="clear"></div>

				<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['setup_finalize_title'];?>
 : </h4>
				<p><span class="bold">1.</span> <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['setup_reminder_1'];?>
</p>
				<p><span class="bold">2.</span> <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['setup_reminder_2'];?>
</p>

				<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['configuration_options_title'];?>
</h4>
				<div id="integral_evolution_solution" class="paypal-hide">
					<p class="description">
						<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution'];?>

					</p>
					<input type="radio" name="integral_evolution_solution" id="integral_evolution_solution_iframe" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_solution']->value==1){?>checked="checked"<?php }?> /> <label for="integral_evolution_solution_iframe"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution_iframe'];?>
</label><br />
					<input type="radio" name="integral_evolution_solution" id="integral_evolution_solution_no_iframe" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_solution']->value==0){?>checked="checked"<?php }?> /> <label for="integral_evolution_solution_no_iframe"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['integral_evolution_solution_no_iframe'];?>
</label><br/>
					<div id="integral_evolution_template">
						<p class="description">
						<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['template_to_choose'];?>

						</p>
						<img src="../modules/paypal/img/template.png" alt=""><br/>
						<input type="radio" name="integral_evolution_template" id="integral_evolution_template_A" value="A" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="A"){?>checked="checked"<?php }?>  style="margin-left:60px"/> <label for="integral_evolution_template">A</label> &nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="integral_evolution_template" id="integral_evolution_template_B" value="B" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="B"){?>checked="checked"<?php }?> style="margin-left:80px"/> <label for="integral_evolution_template">B</label>&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="integral_evolution_template" id="integral_evolution_template_C" value="C" <?php if ($_smarty_tpl->tpl_vars['PayPal_integral_evolution_template']->value=="C"){?>checked="checked"<?php }?> style="margin-left:70px" /> <label for="integral_evolution_template">C</label>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					
					
				</div>

				<div id="express_checkout_shortcut" class="paypal-hide">
					<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_shortcut_title'];?>
</p>
					<p class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_shortcut_tagline'];?>
</p>
					<input type="radio" name="express_checkout_shortcut" id="paypal_payment_ecs_no_shortcut" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_express_checkout_shortcut']->value==1){?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_no_shortcut"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['yes'];?>
 <?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_recommended'];?>
</label><br />
					<input type="radio" name="express_checkout_shortcut" id="paypal_payment_ecs_shortcut" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_express_checkout_shortcut']->value==0){?>checked="checked"<?php }?> /> <label for="paypal_payment_ecs_shortcut"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['no'];?>
</label>
				</div>

				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_title'];?>
</p>
				<p class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_tagline'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_learn_more_link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_learn_more'];?>
</a></p>
				<input type="radio" name="sandbox_mode" id="paypal_payment_live_mode" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==0){?>checked="checked"<?php }?> /> <label for="paypal_payment_live_mode"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_live_mode'];?>
</label><br />
				<input type="radio" name="sandbox_mode" id="paypal_payment_test_mode" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==1){?>checked="checked"<?php }?> /> <label for="paypal_payment_test_mode"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_test_mode'];?>
</label>

				<br />

				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_title'];?>
</p>
				<p class="description"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_tagline'];?>
</p>
				<input type="radio" name="payment_capture" id="paypal_direct_sale" value="0" <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_capture']->value==0){?>checked="checked"<?php }?> /> <label for="paypal_direct_sale"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_direct'];?>
</label><br />
				<input type="radio" name="payment_capture" id="paypal_manual_capture" value="1" <?php if ($_smarty_tpl->tpl_vars['PayPal_payment_capture']->value==1){?>checked="checked"<?php }?> /> <label for="paypal_manual_capture"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_type_manual'];?>
</label>

				<br /><br />
			</div>

			<input type="hidden" name="submitPaypal" value="paypal_configuration" />
			<input type="submit" name="submitButton" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['save_button'];?>
" id="paypal_submit" />
			
			<div class="box paypal-hide" id="paypal-test-mode-confirmation">
				<h3><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_title'];?>
 :</h3>
				<ul>
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_content'];?>

				</ul>

				<h4><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['sandbox_confirmation_question'];?>
</h4>

				<div id="buttons">
					<button class="fancy_confirm" name="fancy_confirm" value="0"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['no'];?>
</button>
					<button class="fancy_confirm" name="fancy_confirm" value="1"><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['yes'];?>
</button>
				</div>
			</div>

			<?php if (isset($_smarty_tpl->tpl_vars['PayPal_save_success']->value)){?>
			<div class="box paypal-hide" id="paypal-save-success">
				<h3><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_title'];?>
</h3>
				<?php if ($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==0){?>
				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_live_mode'];?>
</p>
				<?php }elseif($_smarty_tpl->tpl_vars['PayPal_sandbox_mode']->value==1){?>
				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['congratulation_test_mode'];?>
</p>
				<?php }?>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['PayPal_save_failure']->value)){?>
			<div class="box paypal-hide" id="paypal-save-failure">
				<h3><?php echo smartyTranslate(array('s'=>'Error !','mod'=>'paypal'),$_smarty_tpl);?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['error_message'];?>
</p>
			</div>
			<?php }?>

			<div class="box paypal-hide" id="js-paypal-save-failure">
				<h3><?php echo smartyTranslate(array('s'=>'Error !','mod'=>'paypal'),$_smarty_tpl);?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['error_message'];?>
</p>
			</div>

			<hr />
		</div>
	</form>

	<div class="box">
		<p class="description">
			<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['express_checkout_tagline_source'];?>

		</p>
	</div>

</div>
<?php }} ?>