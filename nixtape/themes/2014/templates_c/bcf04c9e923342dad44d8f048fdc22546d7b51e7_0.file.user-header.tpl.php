<?php /* Smarty version 3.1.27, created on 2018-03-24 21:27:38
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/user-header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8312722495ab6c2ca30ed89_87036623%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf04c9e923342dad44d8f048fdc22546d7b51e7' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/user-header.tpl',
      1 => 1455661352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8312722495ab6c2ca30ed89_87036623',
  'variables' => 
  array (
    'me' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c2ca3437c2_65478313',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c2ca3437c2_65478313')) {
function content_5ab6c2ca3437c2_65478313 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8312722495ab6c2ca30ed89_87036623';
?>
<div id="user-profile-header">
    <div class="row">
      <div class="col-sm-3">
	<img class="img-circle img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['me']->value->getAvatar(158);?>
" alt="[ <?php echo $_smarty_tpl->tpl_vars['me']->value->name;?>
 avatar ]">
      </div>
      <div class="col-sm-9">
	  <h1><?php echo $_smarty_tpl->tpl_vars['me']->value->name;?>

	  </h1>
	  <?php if ($_smarty_tpl->tpl_vars['me']->value->getTotalTracks()) {?>
	  <p>
	    <span class="label label-primary">
	      <span class="glyphicon glyphicon-play"></span>
	      <?php echo $_smarty_tpl->tpl_vars['me']->value->getTotalTracks();?>
 plays
	    </span>
	  </p>
	  <?php }?>
	  <div id='user_bio'>
	    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->bio, ENT_QUOTES, 'UTF-8', true);?>
</p>
	  </div>
	  <?php if ($_smarty_tpl->tpl_vars['me']->value->homepage) {?>
	  <p><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['me']->value->homepage;?>
"><?php echo $_smarty_tpl->tpl_vars['me']->value->homepage;?>
</a></p>
	  <?php }?>
      </div>
    </div>
    <div class="margin-top">
      <?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</div>
<br/><?php }
}
?>