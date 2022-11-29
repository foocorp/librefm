<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/flattr-track-button.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1139444275ab6c1e12ac328_18385718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196cd6970a3a7a7e8558bb13ee099a29f5fa382d' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/flattr-track-button.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139444275ab6c1e12ac328_18385718',
  'variables' => 
  array (
    'flattr_uid' => 0,
    'track' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e12cf892_17464323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e12cf892_17464323')) {
function content_5ab6c1e12cf892_17464323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1139444275ab6c1e12ac328_18385718';
if ($_smarty_tpl->tpl_vars['flattr_uid']->value) {?>
	<div class="flattr" style="padding-left: 2em;">
		<a class="FlattrButton" style="display:none;"
			title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['track']->value->artist_name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['track']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
			rev="flattr;uid:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['flattr_uid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;category:audio;tags:music,creative commons,free,libre.fm;"
			href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['track']->value->artist_name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 is making <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['track']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 freely available for you to listen to.</a>
	</div>
<?php }

}
}
?>