<?php /* Smarty version 3.1.27, created on 2018-03-27 03:00:00
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/account-deleted.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14053127445ab9b3b04cdb45_65342682%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fd52ef8d3cd257d2d38206cb4bc5ec23cdebfad' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/account-deleted.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14053127445ab9b3b04cdb45_65342682',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab9b3b05c89f7_54994760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab9b3b05c89f7_54994760')) {
function content_5ab9b3b05c89f7_54994760 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14053127445ab9b3b04cdb45_65342682';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h2 property="dc:title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Profile deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>

<div class="alert alert-danger">
  <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your account has been deleted.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>