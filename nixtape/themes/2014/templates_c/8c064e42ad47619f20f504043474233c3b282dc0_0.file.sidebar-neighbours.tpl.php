<?php /* Smarty version 3.1.27, created on 2018-03-24 21:33:54
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/sidebar-neighbours.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15923301445ab6c442038659_30304904%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c064e42ad47619f20f504043474233c3b282dc0' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/sidebar-neighbours.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15923301445ab6c442038659_30304904',
  'variables' => 
  array (
    'neighbours' => 0,
    'neighbour' => 0,
    'isme' => 0,
    'me' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c442095ba4_36955908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c442095ba4_36955908')) {
function content_5ab6c442095ba4_36955908 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15923301445ab6c442038659_30304904';
?>
<div class='sideblock'>
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neighbours<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	<div id='neighbours'>
		<?php
$_from = $_smarty_tpl->tpl_vars['neighbours']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['neighbour'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['neighbour']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['neighbour']->value) {
$_smarty_tpl->tpl_vars['neighbour']->_loop = true;
$foreach_neighbour_Sav = $_smarty_tpl->tpl_vars['neighbour'];
?>
			<a href='<?php echo $_smarty_tpl->tpl_vars['neighbour']->value['user']->getURL();?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['neighbour']->value['user']->getAvatar(), ENT_QUOTES, 'UTF-8', true);?>
' class='neighbour' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['neighbour']->value['user']->name, ENT_QUOTES, 'UTF-8', true);?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['neighbour']->value['user']->name, ENT_QUOTES, 'UTF-8', true);?>
' /></a>
		<?php
$_smarty_tpl->tpl_vars['neighbour'] = $foreach_neighbour_Sav;
}
?>

		<br /><br />

		<?php if ($_smarty_tpl->tpl_vars['isme']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
These folks all have excellent taste!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
These folks all have similar tastes to %1.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</div>
</div>
<?php }
}
?>