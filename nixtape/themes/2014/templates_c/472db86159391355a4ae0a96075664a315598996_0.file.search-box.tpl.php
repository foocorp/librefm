<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/search-box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12554193475ab6c1e12258b8_53151244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472db86159391355a4ae0a96075664a315598996' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/search-box.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12554193475ab6c1e12258b8_53151244',
  'variables' => 
  array (
    'search_term' => 0,
    'search_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e1249e03_31122985',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e1249e03_31122985')) {
function content_5ab6c1e1249e03_31122985 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12554193475ab6c1e12258b8_53151244';
?>
<form class="navbar-form navbar-right" action='/search.php' method='get' role='search'>
  <div class="form-group">
	    <input class="form-control" name='search_term' type='text' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_term']->value, ENT_QUOTES, 'UTF-8', true);?>
'/>
	</div>
	<div class="form-group">
	    <select class="form-control" name='search_type'>
	      <option value='artist' <?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'artist') {?>selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	      <option value='user' <?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'user') {?>selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	      <option value='tag' <?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'tag') {?>selected<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	    </select>
	</div>
	<div class="form-group">
	  <button class="btn btn-default" type='submit' id='search_button'>
	    <span class="glyphicon glyphicon-search"></span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </button>
	</div>
</form>
<?php }
}
?>