<?php /* Smarty version 3.1.27, created on 2018-03-24 21:27:38
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/user-profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7805743095ab6c2ca26c449_30714322%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902b1247075c9226d21e90a2591d8ef286ea30e4' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/user-profile.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7805743095ab6c2ca26c449_30714322',
  'variables' => 
  array (
    'nowplaying' => 0,
    'me' => 0,
    'userscrobbles' => 0,
    'lovedArtists' => 0,
    'recommendedArtists' => 0,
    'artist' => 0,
    'awesomenumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c2ca2f51c9_14985415',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c2ca2f51c9_14985415')) {
function content_5ab6c2ca2f51c9_14985415 ($_smarty_tpl) {
if (!is_callable('smarty_function_userscrobbles')) require_once '/var/gnu-fm/nixtape//themes/2014/plugins/function.userscrobbles.php';

$_smarty_tpl->properties['nocache_hash'] = '7805743095ab6c2ca26c449_30714322';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'user-header.tpl','showbio'=>true), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['nowplaying']->value) {?>
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Now playing: </strong>
	<span class="glyphicon glyphicon-music"></span>
	<a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['nowplaying']->value[0]['trackurl'];?>
">
	   <?php echo $_smarty_tpl->tpl_vars['nowplaying']->value[0]['track'];?>

	</a>
	by
	<a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['nowplaying']->value[0]['artisturl'];?>
">
	  <?php echo $_smarty_tpl->tpl_vars['nowplaying']->value[0]['artist'];?>

	</a>
</div>
<?php }?>

<?php echo smarty_function_userscrobbles(array('userid'=>$_smarty_tpl->tpl_vars['me']->value->uniqueid,'limit'=>10),$_smarty_tpl);?>

<h3>Recent plays</h3>
<?php echo $_smarty_tpl->getSubTemplate ("tracklist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>$_smarty_tpl->getConfigVariable( 'table'),'items'=>$_smarty_tpl->tpl_vars['userscrobbles']->value,'fimage'=>true,'fstream'=>true,'fartist'=>true,'flove'=>true,'ftime'=>true), 0);
?>


<?php if (!empty($_smarty_tpl->tpl_vars['lovedArtists']->value)) {?>
	<br />
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>$_smarty_tpl->tpl_vars['me']->value->name)); $_block_repeat=true; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['me']->value->name), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free artists that %1 loves<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['me']->value->name), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	<ul class="tagcloud">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lovedArtists']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<li style='font-size:<?php echo $_smarty_tpl->tpl_vars['lovedArtists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
'><a href='<?php echo $_smarty_tpl->tpl_vars['lovedArtists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pageurl'];?>
'><?php echo $_smarty_tpl->tpl_vars['lovedArtists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
		<?php endfor; endif; ?>
	</ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['recommendedArtists']->value)) {?>
	<br />
	<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>$_smarty_tpl->tpl_vars['me']->value->name)); $_block_repeat=true; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['me']->value->name), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free artists that %1 might like<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['me']->value->name), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	<ul class="tagcloud">
		<?php
$_from = $_smarty_tpl->tpl_vars['recommendedArtists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['artist'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['artist']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
$_smarty_tpl->tpl_vars['artist']->_loop = true;
$foreach_artist_Sav = $_smarty_tpl->tpl_vars['artist'];
?>
			<li style='font-size:<?php echo $_smarty_tpl->tpl_vars['artist']->value['size'];?>
'><a href='<?php echo $_smarty_tpl->tpl_vars['artist']->value['url'];?>
'><?php echo $_smarty_tpl->tpl_vars['artist']->value['artist'];?>
</a></li>
		<?php
$_smarty_tpl->tpl_vars['artist'] = $foreach_artist_Sav;
}
?>
	</ul>
<?php }?>

<p><small><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('awesome'=>$_smarty_tpl->tpl_vars['awesomenumber']->value)); $_block_repeat=true; echo smarty_block_t(array('awesome'=>$_smarty_tpl->tpl_vars['awesomenumber']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your awesome number is: %1.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('awesome'=>$_smarty_tpl->tpl_vars['awesomenumber']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></p>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>