<?php /* Smarty version 3.1.27, created on 2018-03-24 21:46:12
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/popular-page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11113334645ab6c7247f6760_11008346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc62ca2b987cd45eceef186f19bcee4594269ab2' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/popular-page.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11113334645ab6c7247f6760_11008346',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c724816264_29531679',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c724816264_29531679')) {
function content_5ab6c724816264_29531679 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11113334645ab6c7247f6760_11008346';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="tag-cloud-box">

    <?php echo $_smarty_tpl->getSubTemplate ('popular.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>