<?php /* Smarty version 3.1.27, created on 2018-03-24 21:36:14
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/user-recent-tracks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8950365655ab6c4ced95b05_78662627%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae48a9bf48e6892ef776cd208fd8041a5038d08c' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/user-recent-tracks.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8950365655ab6c4ced95b05_78662627',
  'variables' => 
  array (
    'me' => 0,
    'scrobbles' => 0,
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c4cee1f2c1_39140861',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c4cee1f2c1_39140861')) {
function content_5ab6c4cee1f2c1_39140861 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8950365655ab6c4ced95b05_78662627';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'user-header.tpl'), 0);
?>


<div about="[_:seq1]" typeof="rdf:Seq" rev="rss:items">
	<h3 typeof="rss:channel" property="rss:title" rel="rss:link" resource="#latest_plays" id="latest_plays" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true);?>
's Latest Plays"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('plays'=>count($_smarty_tpl->tpl_vars['scrobbles']->value))); $_block_repeat=true; echo smarty_block_t(array('plays'=>count($_smarty_tpl->tpl_vars['scrobbles']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Latest %1 Plays:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('plays'=>count($_smarty_tpl->tpl_vars['scrobbles']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
</div>

<ol class="gobbles" about="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" rev="gob:user">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['scrobbles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<li>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['trackurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['track'], ENT_QUOTES, 'UTF-8', true);?>
</a> by <a about="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_artist'], ENT_QUOTES, 'UTF-8', true);?>
" typeof="mo:MusicArtist" property="foaf:name" rel="foaf:page"
					class="fn url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['artisturl'], ENT_QUOTES, 'UTF-8', true);?>
"
					><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['artist'], ENT_QUOTES, 'UTF-8', true);?>
</a> <?php if ($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['albumurl']) {?> on the album, <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['albumurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['album'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?>
			&mdash; <?php echo $_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['timehuman'];?>
 <?php if ($_smarty_tpl->tpl_vars['scrobbles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['loved']) {?><img src='<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
/love-small.png' alt='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' title='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' /><?php }?>
	</li>
<?php endfor; endif; ?>
</ol>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>