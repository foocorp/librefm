<?php /* Smarty version 3.1.27, created on 2018-03-25 13:03:44
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/radio_oldxspf.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8945455135ab79e30796ef5_04974363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e522483af550ec447249645ae8d056289bf38f9c' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/radio_oldxspf.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8945455135ab79e30796ef5_04974363',
  'variables' => 
  array (
    'title' => 0,
    'radiotracks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab79e308204d7_58097515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab79e308204d7_58097515')) {
function content_5ab79e308204d7_58097515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8945455135ab79e30796ef5_04974363';
?>
<playlist version="1" xmlns:lastfm="http://www.audioscrobbler.net/dtd/xspf-lastfm">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<creator>libre.fm</creator>
<link rel="http://www.last.fm/skipsLeft">9999</link>
<trackList>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['name'] = 'rt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['radiotracks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rt']['total']);
?>
	<track>
	    <location><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['location'], ENT_QUOTES, 'UTF-8', true);?>
</location>
	    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
	    <id><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
</id>
	    <album><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['album'], ENT_QUOTES, 'UTF-8', true);?>
</album>
	    <creator><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['creator'], ENT_QUOTES, 'UTF-8', true);?>
</creator>
	    <duration><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['duration'], ENT_QUOTES, 'UTF-8', true);?>
</duration>
	    <image><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['image'], ENT_QUOTES, 'UTF-8', true);?>
</image>
	    <link rel="http://www.last.fm/artistpage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['artisturl'], ENT_QUOTES, 'UTF-8', true);?>
</link>
	    <link rel="http://www.last.fm/albumpage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['albumurl'], ENT_QUOTES, 'UTF-8', true);?>
</link>
	    <link rel="http://www.last.fm/trackpage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['trackurl'], ENT_QUOTES, 'UTF-8', true);?>
</link>
	    <link rel="http://www.last.fm/buyTrackURL"></link>
	    <link rel="http://www.last.fm/buyAlbumURL"></link>
	    <link rel="http://www.last.fm/freeTrackURL"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radiotracks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rt']['index']]['downloadurl'], ENT_QUOTES, 'UTF-8', true);?>
</link>
	</track>
<?php endfor; endif; ?>

</trackList>
</playlist>
<?php }
}
?>