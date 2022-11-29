<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:49
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/mini-header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9413885995ab6c221c05478_29677426%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44bbdec73d9ed4c380ea51198a296ad494ffb44' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/mini-header.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9413885995ab6c221c05478_29677426',
  'variables' => 
  array (
    'site_name' => 0,
    'base_url' => 0,
    'default_theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c221c16b39_26874301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c221c16b39_26874301')) {
function content_5ab6c221c16b39_26874301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9413885995ab6c221c05478_29677426';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/css/custom.css" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body id="signin">
  <div class="container">
<?php }
}
?>