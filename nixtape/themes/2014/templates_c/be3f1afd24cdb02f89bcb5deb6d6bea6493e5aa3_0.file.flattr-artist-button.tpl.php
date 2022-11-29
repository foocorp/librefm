<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:47
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/flattr-artist-button.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10509906125ab6c1e3f21e53_97802302%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3f1afd24cdb02f89bcb5deb6d6bea6493e5aa3' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/flattr-artist-button.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10509906125ab6c1e3f21e53_97802302',
  'variables' => 
  array (
    'flattr_uid' => 0,
    'name' => 0,
    'bio_summary' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e4000325_17511536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e4000325_17511536')) {
function content_5ab6c1e4000325_17511536 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10509906125ab6c1e3f21e53_97802302';
if ($_smarty_tpl->tpl_vars['flattr_uid']->value) {?>
	<div class="flattr" style="float: right; padding-right: 2em;">
		<a class="FlattrButton" style="display:none;"
			title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
			rev="flattr;uid:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['flattr_uid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;category:audio;tags:music;"
			<?php if ($_smarty_tpl->tpl_vars['bio_summary']->value) {?>
				href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bio_summary']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
			<?php } else { ?>
				href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 makes their music available for you to listen to for free.</a>
			<?php }?>
	</div>
<?php }

}
}
?>