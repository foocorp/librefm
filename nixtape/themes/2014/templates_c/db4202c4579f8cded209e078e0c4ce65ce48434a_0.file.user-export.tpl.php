<?php /* Smarty version 3.1.27, created on 2021-01-19 19:10:30
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/user-export.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22097058460072ea64b9d32_74656779%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4202c4579f8cded209e078e0c4ce65ce48434a' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/user-export.tpl',
      1 => 1531844303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22097058460072ea64b9d32_74656779',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60072ea6598838_00159443',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60072ea6598838_00159443')) {
function content_60072ea6598838_00159443 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22097058460072ea64b9d32_74656779';
$_smarty_tpl->tpl_vars['nosidebar'] = new Smarty_Variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container">
      <div class="row">
        <div class="col-md-3">
	&nbsp;
	</div>
	<div class="col-md-6">

<h3>Export my data</h3>

<p>If you'd like an export of your listening data, please email <a href="mailto:mattl@cnuk.org">mattl@cnuk.org</a> &mdash; please make sure your email contains enough detail, including your email address for your account and your username. All data requests are handled by one person, so please be patient. If you don't hear from someone in 72 hours, please email again.</p>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</div>
</div>
</div>
<?php }
}
?>