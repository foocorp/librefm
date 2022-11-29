<?php /* Smarty version 3.1.27, created on 2018-03-24 22:55:44
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/user-station.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12190887475ab6d770d00ca6_32625088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a1e2197b6c3f85887f431be6792ef2ad94d873d' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/user-station.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12190887475ab6d770d00ca6_32625088',
  'variables' => 
  array (
    'type' => 0,
    'me' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6d770d6ec17_36536006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6d770d6ec17_36536006')) {
function content_5ab6d770d6ec17_36536006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12190887475ab6d770d00ca6_32625088';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'user-header.tpl'), 0);
?>


	<ul class="list-inline">
		<li>
		<?php if ($_smarty_tpl->tpl_vars['type']->value != 'loved') {?><a href='<?php echo $_smarty_tpl->tpl_vars['me']->value->getURL('station');?>
'><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loved radio<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['type']->value != 'loved') {?></a><?php }?>
		</li>
		<li>
		<?php if ($_smarty_tpl->tpl_vars['type']->value != 'recommended') {?><a href='<?php echo $_smarty_tpl->tpl_vars['me']->value->getURL('station','type=recommended');?>
'><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recommended radio<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['type']->value != 'recommended') {?></a><?php }?>
		</li>
		<li>
		<?php if ($_smarty_tpl->tpl_vars['type']->value != 'mix') {?><a href='<?php echo $_smarty_tpl->tpl_vars['me']->value->getURL('station','type=mix');?>
'><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mix radio<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['type']->value != 'mix') {?></a><?php }?>
		</li>
		<li>
		<?php if ($_smarty_tpl->tpl_vars['type']->value != 'neighbours') {?><a href='<?php echo $_smarty_tpl->tpl_vars['me']->value->getURL('station','type=neighbours');?>
'><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neighbourhood radio<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['type']->value != 'neighbours') {?></a><?php }?>
		</li>
	</ul>


	<?php echo $_smarty_tpl->getSubTemplate ('player.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>