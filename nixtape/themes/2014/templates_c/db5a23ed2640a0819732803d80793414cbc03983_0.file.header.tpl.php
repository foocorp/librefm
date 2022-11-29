<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14111052155ab6c1e1126603_40119960%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5a23ed2640a0819732803d80793414cbc03983' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/header.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14111052155ab6c1e1126603_40119960',
  'variables' => 
  array (
    'pagetitle' => 0,
    'site_name' => 0,
    'base_url' => 0,
    'default_theme' => 0,
    'extra_head_links' => 0,
    'nosidebar' => 0,
    'subheader' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e11b59b5_51678256',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e11b59b5_51678256')) {
function content_5ab6c1e11b59b5_51678256 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_escape')) require_once '/var/gnu-fm/nixtape/vendor/smarty/smarty/libs/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '14111052155ab6c1e1126603_40119960';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'theme.conf', null, 'global');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php if (!($_smarty_tpl->tpl_vars['pagetitle']->value)) {?>
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	<?php } else { ?>
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagetitle']->value, ENT_QUOTES, 'UTF-8', true);?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	<?php }?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/css/custom.css" type="text/css" />
	<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/css/kaboot.css" type="text/css" /> -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery-ui.custom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['default_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var base_url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/player.js"><?php echo '</script'; ?>
>
	<meta name="author" content="FooCorp catalogue number FOO200 and contributors" />
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['extra_head_links']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
	<link rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_head_links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rel'], ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['extra_head_links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'], 'UTF-8');?>
" type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_head_links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_head_links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'], ENT_QUOTES, 'UTF-8', true);?>
"  />
<?php endfor; endif; ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
  <div id="wrapper">
  <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".gfm-navbar-collapse">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>
	  <a id="title" class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a>
	</div>
	<nav class="collapse navbar-collapse gfm-navbar-collapse" role="navigation">
	  <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	  <?php echo $_smarty_tpl->getSubTemplate ('search-box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</nav>
      </div>
  </header>
				<?php if ($_smarty_tpl->tpl_vars['nosidebar']->value) {?>
                                <!-- nosb -->
				<?php } else { ?>
                                <div class="container" id="content">
		                  <div class="row">
		                    <article>
				      <div class="col-sm-8">
					<header>
						<?php if (isset($_smarty_tpl->tpl_vars['subheader']->value)) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['subheader']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

						<?php }?>
					</header>
					<section>
				<?php }

}
}
?>