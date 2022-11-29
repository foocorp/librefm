<?php /* Smarty version 3.1.27, created on 2018-03-26 08:38:48
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/delete-profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8184933555ab8b198b07330_97399708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3980468c6714447386bb30d42da6b605d59c5fbe' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/delete-profile.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8184933555ab8b198b07330_97399708',
  'variables' => 
  array (
    'this_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab8b198b2c053_00886941',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab8b198b2c053_00886941')) {
function content_5ab8b198b2c053_00886941 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8184933555ab8b198b07330_97399708';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h2 property="dc:title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove your profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>

<div class="alert alert-info">
  <p>
    <strong>Confirmation mail</strong> has been sent to email on file for <strong> <?php echo $_smarty_tpl->tpl_vars['this_user']->value->name;?>
 </strong>. Thank you.
  </p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>