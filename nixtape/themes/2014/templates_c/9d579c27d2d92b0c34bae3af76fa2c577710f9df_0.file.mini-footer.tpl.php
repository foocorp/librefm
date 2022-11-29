<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:49
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/mini-footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2472602705ab6c221c1a7d8_50328140%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d579c27d2d92b0c34bae3af76fa2c577710f9df' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/mini-footer.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2472602705ab6c221c1a7d8_50328140',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c221c2f679_38794460',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c221c2f679_38794460')) {
function content_5ab6c221c2f679_38794460 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2472602705ab6c221c1a7d8_50328140';
?>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-6 margin-top">
      <ul class="list-inline text-center">
	<li><a href="/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back to site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &middot;</li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/register.php"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &middot;</li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login.php"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &middot;</li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/reset.php"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lost password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><li>
      </ul>
    </div>
  </div>
</div> <!-- end of container -->
</div>
</body>
</html>
<?php }
}
?>