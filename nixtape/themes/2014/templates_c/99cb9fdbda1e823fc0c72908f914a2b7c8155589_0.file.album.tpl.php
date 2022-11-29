<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:06
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/album.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13564194025ab6c1f6247a51_90884046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cb9fdbda1e823fc0c72908f914a2b7c8155589' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/album.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13564194025ab6c1f6247a51_90884046',
  'variables' => 
  array (
    'album' => 0,
    'artisttracks' => 0,
    'add_track_link' => 0,
    'album_station' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1f62b7378_60597009',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1f62b7378_60597009')) {
function content_5ab6c1f62b7378_60597009 ($_smarty_tpl) {
if (!is_callable('smarty_function_artisttracks')) require_once '/var/gnu-fm/nixtape//themes/2014/plugins/function.artisttracks.php';

$_smarty_tpl->properties['nocache_hash'] = '13564194025ab6c1f6247a51_90884046';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'album-header.tpl'), 0);
?>

<br/><br/>

<h4>Tracks</h4>
<?php echo smarty_function_artisttracks(array('artist'=>$_smarty_tpl->tpl_vars['album']->value->artist_name,'album'=>$_smarty_tpl->tpl_vars['album']->value->name),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('tracklist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>$_smarty_tpl->getConfigVariable( 'table'),'items'=>$_smarty_tpl->tpl_vars['artisttracks']->value,'fstream'=>true), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['add_track_link']->value) {?><a href='<?php echo $_smarty_tpl->tpl_vars['add_track_link']->value;?>
'><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add new track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></a><?php }?>


<?php if ($_smarty_tpl->tpl_vars['artisttracks']->value[0]['streamable']) {?>
	<?php $_smarty_tpl->tpl_vars['streamable'] = new Smarty_Variable(true, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['album_station'] = new Smarty_Variable("librefm://artist/".((string)$_smarty_tpl->tpl_vars['album']->value->artist_name)."/album/".((string)$_smarty_tpl->tpl_vars['album']->value->name), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sideplayer'=>true,'station'=>$_smarty_tpl->tpl_vars['album_station']->value), 0);
?>

<?php }
}
?>