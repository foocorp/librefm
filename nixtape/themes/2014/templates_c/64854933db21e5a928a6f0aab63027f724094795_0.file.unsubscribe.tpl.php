<?php /* Smarty version 3.1.27, created on 2018-03-29 20:03:32
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/unsubscribe.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7566381975abd469491acc3_47643492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64854933db21e5a928a6f0aab63027f724094795' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/unsubscribe.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7566381975abd469491acc3_47643492',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abd46949fff43_02744107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abd46949fff43_02744107')) {
function content_5abd46949fff43_02744107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7566381975abd469491acc3_47643492';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, the link you followed does not appear to be correct. Please make sure you copied the entire link from your mail client. If this still doesn't work you can change your subscribption options at any time from your profile page by logging in, visiting your profile and clicking the "Edit" link.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } else { ?>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You've now been unsubscribed from our e-mails, if you'd ever like to subscribe again simply log in, visit your profile and click the "Edit" link.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }

}
}
?>