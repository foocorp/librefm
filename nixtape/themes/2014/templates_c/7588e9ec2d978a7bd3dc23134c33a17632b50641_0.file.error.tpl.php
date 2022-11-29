<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:01
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13823890615ab6c1f1e020c3_89561870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7588e9ec2d978a7bd3dc23134c33a17632b50641' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/error.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13823890615ab6c1f1e020c3_89561870',
  'variables' => 
  array (
    'default_theme' => 0,
    'pagetitle' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1f1e2deb2_03771968',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1f1e2deb2_03771968')) {
function content_5ab6c1f1e2deb2_03771968 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13823890615ab6c1f1e020c3_89561870';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['default_theme']->value != 'librefm') {?> 
<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
<?php }?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['error_message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>