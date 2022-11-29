<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/submenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13288066235ab6c1e1272158_29697737%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1262fa0eabe7c1bacd0a4651184f7d20cec8a2f' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/submenu.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13288066235ab6c1e1272158_29697737',
  'variables' => 
  array (
    'submenu' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e12a4838_44462771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e12a4838_44462771')) {
function content_5ab6c1e12a4838_44462771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13288066235ab6c1e1272158_29697737';
if (isset($_smarty_tpl->tpl_vars['submenu']->value)) {?>
	<ul class="nav nav-pills">
	<?php
$_from = $_smarty_tpl->tpl_vars['submenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
		<li <?php if ($_smarty_tpl->tpl_vars['i']->value['active']) {?>class='active'<?php }?>>
			<a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
'><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
		</li>
	<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
	</ul>
	<?php } else { ?>&nbsp;
<?php }

}
}
?>