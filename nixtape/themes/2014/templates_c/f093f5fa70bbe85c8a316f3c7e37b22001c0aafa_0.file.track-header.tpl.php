<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/track-header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18773386785ab6c1e124f5d0_74193117%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f093f5fa70bbe85c8a316f3c7e37b22001c0aafa' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/track-header.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18773386785ab6c1e124f5d0_74193117',
  'variables' => 
  array (
    'artist' => 0,
    'img_url' => 0,
    'track' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e126d323_54024086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e126d323_54024086')) {
function content_5ab6c1e126d323_54024086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18773386785ab6c1e124f5d0_74193117';
?>
<div id="track-header">
  <div class="row">
    <div class="col-sm-2">
    <img class="img-responsive" <?php if ($_smarty_tpl->tpl_vars['artist']->value->image_small) {?> src="<?php echo $_smarty_tpl->tpl_vars['artist']->value->image_small;?>
"
    <?php } else { ?> src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
/qm160.png" <?php }?>  alt="[ Track Image ]"/>
    </div>
    <div class="col-sm-10">
	<h1>
	  <?php echo $_smarty_tpl->tpl_vars['track']->value->name;?>

	</h1>
	<p>by <a href="<?php echo $_smarty_tpl->tpl_vars['artist']->value->getURL();?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
</a></p>
    </div>
  </div>
  <div class="margin-top">
    <?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </div>
</div>
<?php }
}
?>