<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6485528925ab6c1e13f66f1_35820949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5434a113e5747b7ef2326dbf7a35f65fe7999da8' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/sidebar.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6485528925ab6c1e13f66f1_35820949',
  'variables' => 
  array (
    'player' => 0,
    'streamable' => 0,
    'sideblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e14134f6_73598102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e14134f6_73598102')) {
function content_5ab6c1e14134f6_73598102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6485528925ab6c1e13f66f1_35820949';
?>
<div class="col-sm-4">
	<aside>
	<?php if ($_smarty_tpl->tpl_vars['player']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['streamable']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('player.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>
	<?php }?>

	<?php
$_from = $_smarty_tpl->tpl_vars['sideblocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$foreach_block_Sav = $_smarty_tpl->tpl_vars['block'];
?>
		<div class='sideblock-top'></div>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['block']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class='sideblock-bottom'></div>
	<?php
$_smarty_tpl->tpl_vars['block'] = $foreach_block_Sav;
}
if (!$_smarty_tpl->tpl_vars['block']->_loop) {
?>
		<div class='sideblock-top'></div>
		<?php echo $_smarty_tpl->getSubTemplate ('sidebar-tips.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class='sideblock-bottom'></div>
	<?php
}
?>
	<div class='sideblock-top'></div>
	<?php echo $_smarty_tpl->getSubTemplate ('sidebar-ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class='sideblock-bottom'></div>
	</aside>
</div>
<?php }
}
?>