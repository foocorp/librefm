<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:06
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/album-header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:298757865ab6c1f62d2e27_89671024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f266cbf8f977234c2d2826f2abf4041d7940815' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/album-header.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298757865ab6c1f62d2e27_89671024',
  'variables' => 
  array (
    'album' => 0,
    'img_url' => 0,
    'artist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1f63043e8_81972421',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1f63043e8_81972421')) {
function content_5ab6c1f63043e8_81972421 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/gnu-fm/nixtape/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '298757865ab6c1f62d2e27_89671024';
?>
<div id="album-header">

  <div class="row">
    <div class="col-sm-2">
	<img class="img-responsive"
	     <?php if ($_smarty_tpl->tpl_vars['album']->value->image) {?>src="<?php echo $_smarty_tpl->tpl_vars['album']->value->image;?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
/qm160.png"<?php }?>
	alt="[ Album Image ]" />
    </div>
    <div class="col-sm-10">
    <h2>
      <?php echo $_smarty_tpl->tpl_vars['album']->value->name;?>

    </h2>
    <p>by <a href="<?php echo $_smarty_tpl->tpl_vars['artist']->value->getURL();?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
</a></p>
    <?php if ($_smarty_tpl->tpl_vars['album']->value->releasedate) {?>
    <p>Released on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['album']->value->releasedate,"%Y-%m-%d");?>
</p>
    <?php }?>
    </div>
  </div>
  <div class="margin-top">
    <?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </div>
</div>
<br />
<?php }
}
?>