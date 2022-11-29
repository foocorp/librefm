<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:47
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/artist-header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17695753225ab6c1e3ea73f5_42952130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805d8a89cde185887f0c070ab3e91f6d3ce87c09' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/artist-header.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17695753225ab6c1e3ea73f5_42952130',
  'variables' => 
  array (
    'artist' => 0,
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e3ed3d14_95439315',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e3ed3d14_95439315')) {
function content_5ab6c1e3ed3d14_95439315 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17695753225ab6c1e3ea73f5_42952130';
?>
<div id="artist-header">
  <div class="row">
    <div class="col-sm-2">
      <img class="img-responsive" <?php if ($_smarty_tpl->tpl_vars['artist']->value->image_medium) {?>src="<?php echo $_smarty_tpl->tpl_vars['artist']->value->image_medium;?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
qm160.png"<?php }?>
      alt= "[ <?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
 photo ]"/>
    </div>
    <div class="col-sm-10">
      <h1><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>

      </h1>
      <?php if ($_smarty_tpl->tpl_vars['artist']->value->getListenerCount()) {?>
      <p>
	<span class="label label-primary">
	  <span class="glyphicon glyphicon-headphones"></span>
	  <?php echo $_smarty_tpl->tpl_vars['artist']->value->getListenerCount();?>
 listeners</span>
      </p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['artist']->value->homepage) {?>
      <p><a href="<?php echo $_smarty_tpl->tpl_vars['artist']->value->homepage;?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value->homepage;?>
</a></p>
      <?php }?>
    </div>

  </div>

  <div class="margin-top">
    <?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </div>
</div>
<br/>

<?php }
}
?>