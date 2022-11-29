<?php /* Smarty version 3.1.27, created on 2018-03-24 21:34:49
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/popular.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10565687495ab6c479317993_66620727%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52caad3965810d64032b3f58af8bf76f1c5fc2af' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/popular.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10565687495ab6c479317993_66620727',
  'variables' => 
  array (
    'tagcloud' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c47933ee69_13757917',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c47933ee69_13757917')) {
function content_5ab6c47933ee69_13757917 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10565687495ab6c479317993_66620727';
?>
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Explore popular free artists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	<ul class="nav nav-pills">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tagcloud']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<li style='font-size:<?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
'><a href='<?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pageurl'];?>
' title='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('loves'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count'])); $_block_repeat=true; echo smarty_block_t(array('loves'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This artist was loved %1 times<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('loves'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' rel='tag'><?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
	<?php endfor; endif; ?>
	</ul>
<?php }
}
?>