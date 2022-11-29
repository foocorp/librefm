<?php /* Smarty version 3.1.27, created on 2018-03-24 21:46:16
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11786489665ab6c728dca324_08603274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddba47018c4f56600b30dbcd4a1eb43c623116d5' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/login.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11786489665ab6c728dca324_08603274',
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c728ded331_96473056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c728ded331_96473056')) {
function content_5ab6c728ded331_96473056 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11786489665ab6c728dca324_08603274';
echo $_smarty_tpl->getSubTemplate ('mini-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert"
	      aria-hidden="true">&times;</button>
      <p id='errors'><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
    </div>	
    <?php }?>

    <form method="post" class="form-signin" role='form'>
      <?php echo $_smarty_tpl->getSubTemplate ('login-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </form>

<?php echo $_smarty_tpl->getSubTemplate ('mini-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>