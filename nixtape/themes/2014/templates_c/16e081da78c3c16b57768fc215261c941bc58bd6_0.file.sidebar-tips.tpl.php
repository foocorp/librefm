<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/sidebar-tips.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1106583365ab6c1e1417f58_49578661%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e081da78c3c16b57768fc215261c941bc58bd6' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/sidebar-tips.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106583365ab6c1e1417f58_49578661',
  'variables' => 
  array (
    'tip' => 0,
    'site_name' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e142ecd9_59333632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e142ecd9_59333632')) {
function content_5ab6c1e142ecd9_59333632 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/gnu-fm/nixtape/vendor/smarty/smarty/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '1106583365ab6c1e1417f58_49578661';
?>
<div class='sideblock'>
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Did you know...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>

	<p>
	<?php echo smarty_function_math(array('equation'=>'rand(0, 0)','assign'=>'tip'),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['tip']->value == 0) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can listen to a selection of the %1 community's favourite tracks on our <a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/listen.php?station=librefm://community/loved'>Community Station</a>. It's made up out of a random selection of all the tracks that %1 users have said they loved, with the most popular ones being played most frequently.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	</p>

</div>
<?php }
}
?>