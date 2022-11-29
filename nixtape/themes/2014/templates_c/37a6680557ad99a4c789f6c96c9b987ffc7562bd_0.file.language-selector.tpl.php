<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/language-selector.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14257486285ab6c1e14598b0_28835943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a6680557ad99a4c789f6c96c9b987ffc7562bd' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/language-selector.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14257486285ab6c1e14598b0_28835943',
  'variables' => 
  array (
    'lang_selector_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e14b8589_64222165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e14b8589_64222165')) {
function content_5ab6c1e14b8589_64222165 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14257486285ab6c1e14598b0_28835943';
?>
<form class="form-inline pull-right" method='get' action='' role='form'>
      <div class="form-group">
	<label class="sr-only" for='lang'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preferred language:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </label>
	<select class="form-control" name="lang" id="lang" onchange='this.form.submit()'>
		<optgroup label="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select your language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['en_US']) {?>selected="selected"<?php }?> value='en_US'>English</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['ca_ES']) {?>selected="selected"<?php }?> value='ca_ES'>Català</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['cs_CZ']) {?>selected="selected"<?php }?> value='cs_CZ'>Čeština</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['cy_GB']) {?>selected="selected"<?php }?> value='cy_GB'>Cymraeg</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['de_DE']) {?>selected="selected"<?php }?> value='de_DE'>Deutsch</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['es_ES']) {?>selected="selected"<?php }?> value='es_ES'>Español</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['eo']) {?>selected="selected"<?php }?> value='eo'>Esperanto</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['fi_FI']) {?>selected="selected"<?php }?> value='fi_FI'>Finnish</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['fr_FR']) {?>selected="selected"<?php }?> value='fr_FR'>Français</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['gl_ES']) {?>selected="selected"<?php }?> value='gl_ES'>Galician</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['nl_NL']) {?>selected="selected"<?php }?> value='nl_NL'>Nederlands</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['pt_BR']) {?>selected="selected"<?php }?> value='pt_BR'>Português Brasileiro</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['ru_RU']) {?>selected="selected"<?php }?> value='ru_RU'>Pусский язык</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['sq_AL']) {?>selected="selected"<?php }?> value='sq_AL'>Shqip</option>
		<option <?php if ($_smarty_tpl->tpl_vars['lang_selector_array']->value['sl_SI']) {?>selected="selected"<?php }?> value='sl_SI'>Slovenščina</option>
		</optgroup>
	</select>
      </div>
	<noscript>
		<button class="btn btn-primary" type='submit'>
		  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</button>
	</noscript>
</form>
<?php }
}
?>