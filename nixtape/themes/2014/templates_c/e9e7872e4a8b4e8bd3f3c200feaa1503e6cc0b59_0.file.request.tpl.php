<?php /* Smarty version 3.1.27, created on 2018-03-28 10:26:16
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/request.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3874605185abb6dc8e3dba9_39844310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e7872e4a8b4e8bd3f3c200feaa1503e6cc0b59' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/request.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3874605185abb6dc8e3dba9_39844310',
  'variables' => 
  array (
    'errors' => 0,
    'reg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abb6dc8e847c8_66075045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abb6dc8e847c8_66075045')) {
function content_5abb6dc8e847c8_66075045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3874605185abb6dc8e3dba9_39844310';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h2>Request invite</h2>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<p id='errors'><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['reg']->value)) {?>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your request for an invitation has been registered. Thank you for your interest in libre.fm!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } else { ?>

<div id='invite'>

	<form action='' method='post'>
		<fieldset>
	        <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href='http://libre.fm' rel='bookmark' class='vcard fn org url'>libre.fm</a> is now in alpha. We're slowly adding new users, so if you're interested, type in your email address and you'll receive an invitation in a few days time.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>

			<label for='email'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
must be valid!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></label>
			<input id='email' name='email' type='text' value='' />

			<input type='submit' name='request' value='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Request invite!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'/>
		</fieldset>

	</form>
</div>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>