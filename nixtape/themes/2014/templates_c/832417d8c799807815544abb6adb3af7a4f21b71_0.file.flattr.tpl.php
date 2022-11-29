<?php /* Smarty version 3.1.27, created on 2018-03-24 21:28:54
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/flattr.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9187354945ab6c31613fa47_50581442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832417d8c799807815544abb6adb3af7a4f21b71' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/flattr.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9187354945ab6c31613fa47_50581442',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c316154d94_03933730',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c316154d94_03933730')) {
function content_5ab6c316154d94_03933730 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9187354945ab6c31613fa47_50581442';
?>

<?php echo '<script'; ?>
 type="text/javascript">
/* <![CDATA[ */
	(function() {
		var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
		
		s.type = 'text/javascript';
		s.async = true;
		s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
		t.parentNode.insertBefore(s, t);
	})();
/* ]]> */
<?php echo '</script'; ?>
>

<?php }
}
?>