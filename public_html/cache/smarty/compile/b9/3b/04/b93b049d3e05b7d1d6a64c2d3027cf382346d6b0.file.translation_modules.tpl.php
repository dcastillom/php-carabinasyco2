<?php /* Smarty version Smarty-3.1.14, created on 2014-03-31 22:37:11
         compiled from "/home/carabina/public_html/admin123/themes/default/template/controllers/translations/helpers/view/translation_modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8532608125339d1f758a1f5-12426239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93b049d3e05b7d1d6a64c2d3027cf382346d6b0' => 
    array (
      0 => '/home/carabina/public_html/admin123/themes/default/template/controllers/translations/helpers/view/translation_modules.tpl',
      1 => 1395073064,
      2 => 'file',
    ),
    'aab810825b3bd8b0208b4e5d7f60d83db40db2a6' => 
    array (
      0 => '/home/carabina/public_html/admin123/themes/default/template/helpers/view/view.tpl',
      1 => 1395073064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8532608125339d1f758a1f5-12426239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5339d1f78fb169_08752819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5339d1f78fb169_08752819')) {function content_5339d1f78fb169_08752819($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/carabina/public_html/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/carabina/public_html/tools/smarty/plugins/modifier.regex_replace.php';
?>

<div class="leadin"></div>


	<?php if ($_smarty_tpl->tpl_vars['mod_security_warning']->value){?>
	<div class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'Apache mod_security is activated on your server. This could result in some Bad Request errors'),$_smarty_tpl);?>

	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)){?>
	<div class="alert alert-warning">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type']=='suhosin'){?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl);?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo smartyTranslate(array('s'=>'for max_input_vars.'),$_smarty_tpl);?>
<br/>
			<?php echo smartyTranslate(array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl);?>

		<?php }?>
		<?php echo smartyTranslate(array('s'=>'%s at least, or you will have to edit the translation files.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl);?>

	</div>
	<?php }else{ ?>
		<div class="alert alert-info">
			<p>
				<?php echo smartyTranslate(array('s'=>'Some sentences to translate use this syntax: "You have %%s items...". These "%s" are variables, and PrestaShop takes care of replacing them before displaying your translation.','sprintf'=>'%d, %s, %1$s, %2$d'),$_smarty_tpl);?>
<br>
				<strong><?php echo smartyTranslate(array('s'=>'You must leave these in your translations, and place them appropriately in your sentence.'),$_smarty_tpl);?>
</strong>
			</p>
			<p>
				<?php echo smartyTranslate(array('s'=>'Click on titles to open fieldsets'),$_smarty_tpl);?>
.
			</p>
		</div>
		<div class="panel">
			<p><?php echo smartyTranslate(array('s'=>'Expressions to translate:'),$_smarty_tpl);?>
 <span class="badge"><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl);?>
</span></p>
			<p><?php echo smartyTranslate(array('s'=>'Total missing expresssions:'),$_smarty_tpl);?>
 <span class="badge"><?php echo smartyTranslate(array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['missing_translations']->value),$_smarty_tpl);?>
</p>
		</div>

		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo $_smarty_tpl->tpl_vars['url_submit']->value;?>
" class="form-horizontal">
			<div class="panel">
				<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
				<div id="BoxUseSpecialSyntax">
					<div class="alert alert-warning">
						<p>
							<?php echo smartyTranslate(array('s'=>'Some of these expressions use this special syntax:'),$_smarty_tpl);?>
 <span>%d.</span><br />
							<?php echo smartyTranslate(array('s'=>'You MUST use this syntax in your translations. Here are several examples:'),$_smarty_tpl);?>

						</p>
						<ul>
							<li>"There are <strong>%d</strong> products": "<strong>%d</strong>" <?php echo smartyTranslate(array('s'=>'will be replaced by a number.'),$_smarty_tpl);?>
).</li>
							<li>"List of pages in <strong>%s</strong>": "<strong>%s</strong>" <?php echo smartyTranslate(array('s'=>'will be replaced by a string.'),$_smarty_tpl);?>
).</li>
							<li>"Feature: <strong>%1$s</strong> (<strong>%2$d</strong> values)": "<strong>n$</strong>" <?php echo smartyTranslate(array('s'=>'helps you reorder the arguments when necessary.'),$_smarty_tpl);?>
).</li>
						</ul>
					</div>
				</div>				
				<script type="text/javascript">
					$(document).ready(function(){
						$('a.useSpecialSyntax').click(function(){
							var syntax = $(this).find('img').attr('alt');
							$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
						});
					});
				</script>
				<div class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['cancel_url']->value;?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i>
						<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

					</a>
					<?php echo $_smarty_tpl->tpl_vars['toggle_button']->value;?>

					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
				</div>
			</div>

			<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules_translations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['theme_name']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['theme_name']->value){?><h2>&gt;<?php echo smartyTranslate(array('s'=>'Theme:'),$_smarty_tpl);?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</h2><?php }?>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['module_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['module_name']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
					<h2><?php echo smartyTranslate(array('s'=>'Module:'),$_smarty_tpl);?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</a></h2>
					<?php  $_smarty_tpl->tpl_vars['newLang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newLang']->_loop = false;
 $_smarty_tpl->tpl_vars['template_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newLang']->key => $_smarty_tpl->tpl_vars['newLang']->value){
$_smarty_tpl->tpl_vars['newLang']->_loop = true;
 $_smarty_tpl->tpl_vars['template_name']->value = $_smarty_tpl->tpl_vars['newLang']->key;
?>
						<?php if (!empty($_smarty_tpl->tpl_vars['newLang']->value)){?>
							<?php $_smarty_tpl->tpl_vars['occurrences'] = new Smarty_variable(0, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newLang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])){?><?php $_smarty_tpl->tpl_vars['occurrences'] = new Smarty_variable($_smarty_tpl->tpl_vars['occurrences']->value+1, null, 0);?><?php }?>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['occurrences']->value>0){?>
								<?php $_smarty_tpl->tpl_vars['missing_translations_module'] = new Smarty_variable($_smarty_tpl->tpl_vars['occurrences']->value, null, 0);?>
							<?php }else{ ?>
								<?php $_smarty_tpl->tpl_vars['missing_translations_module'] = new Smarty_variable(0, null, 0);?>
							<?php }?>
							<div class="panel">
								<h3 onclick="$('#<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
').slideToggle();"><?php if ($_smarty_tpl->tpl_vars['theme_name']->value){?><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>

									<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['newLang']->value);?>
</span> <?php echo smartyTranslate(array('s'=>'expressions'),$_smarty_tpl);?>
 <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['missing_translations_module']->value;?>
</span>
								</h3>
								<div name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_div" id="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['missing_translations_module']->value){?>block<?php }else{ ?>none<?php }?>">
									<table class="table">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newLang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
											<tr>
												<td width="40%"><?php echo stripslashes($_smarty_tpl->tpl_vars['key']->value);?>
</td>
												<td>=</td>
												<td> 
													
													<?php $_smarty_tpl->_capture_stack[0][] = array('default', "name", null); ob_start(); ?><?php echo strtolower($_smarty_tpl->tpl_vars['module_name']->value);?>
<?php if ($_smarty_tpl->tpl_vars['theme_name']->value){?>_<?php echo strtolower($_smarty_tpl->tpl_vars['theme_name']->value);?>
<?php }?>_<?php echo strtolower($_smarty_tpl->tpl_vars['template_name']->value);?>
_<?php echo md5($_smarty_tpl->tpl_vars['key']->value);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
													<?php if (strlen($_smarty_tpl->tpl_vars['key']->value)<$_smarty_tpl->tpl_vars['textarea_sized']->value){?>
														<input type="text" 
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])){?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
" 
															value="<?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
"' />
													<?php }else{ ?>
														<textarea rows="<?php echo intval((strlen($_smarty_tpl->tpl_vars['key']->value)/$_smarty_tpl->tpl_vars['textarea_sized']->value));?>
" 
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])){?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
"><?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
</textarea>
													<?php }?>
												</td>
												<td>
													<?php if (isset($_smarty_tpl->tpl_vars['value']->value['use_sprintf'])&&$_smarty_tpl->tpl_vars['value']->value['use_sprintf']){?>
														<a class="useSpecialSyntax" title="<?php echo smartyTranslate(array('s'=>'This expression uses a special syntax:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
">
															<img src="<?php echo @constant('_PS_IMG_');?>
admin/error.png" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" />
														</a>
													<?php }?>
												</td>
											</tr>
										<?php } ?>
									</table>
								</div>
								<div class="panel-footer">
									<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['cancel_url']->value;?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
								</div>
							</div>
						<?php }?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }elseif(isset($_GET['controller'])){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>