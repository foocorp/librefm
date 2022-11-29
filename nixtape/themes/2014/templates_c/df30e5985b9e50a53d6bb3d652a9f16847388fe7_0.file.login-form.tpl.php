<?php /* Smarty version 3.1.27, created on 2018-03-24 21:46:16
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/login-form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17324716245ab6c728df2e60_96294621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df30e5985b9e50a53d6bb3d652a9f16847388fe7' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/login-form.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17324716245ab6c728df2e60_96294621',
  'variables' => 
  array (
    'username' => 0,
    'return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c728e0ff44_70119793',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c728e0ff44_70119793')) {
function content_5ab6c728e0ff44_70119793 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17324716245ab6c728df2e60_96294621';
?>
<div class="form-group">
  <label for='username'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
  <input class="form-control" id='username' name='username' type='text' value='<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
' required autofocus>
</div>
<div class="form-group">
  <label for='password'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
  <input class="form-control" id='password' name='password' type='password' value='' required>
</div>
<div class="checkbox">
  <label for='remember'>
    <input type='checkbox' name='remember' id='remember' /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remember my login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </label>
</div>
<input name="return" type="hidden" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['return']->value);?>
" />
<button class="btn btn-primary btn-lg" type='submit' name='login' value='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' /><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
<a href="/register.php" class="btn btn-success btn-lg">Register now</a>
<?php }
}
?>