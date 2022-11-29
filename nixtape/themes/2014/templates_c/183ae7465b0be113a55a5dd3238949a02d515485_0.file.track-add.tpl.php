<?php /* Smarty version 3.1.27, created on 2018-03-27 15:09:46
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/track-add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:733389415aba5eba6d6c19_72398144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '183ae7465b0be113a55a5dd3238949a02d515485' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/track-add.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '733389415aba5eba6d6c19_72398144',
  'variables' => 
  array (
    'errors' => 0,
    'id' => 0,
    'edit' => 0,
    'name' => 0,
    'streaming_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aba5eba725ff6_25980893',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aba5eba725ff6_25980893')) {
function content_5aba5eba725ff6_25980893 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '733389415aba5eba6d6c19_72398144';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
<div id="errors">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['error'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['error']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['name'] = 'error';
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['error']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['error']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['error']['total']);
?>	
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['error']['index']];?>
</p>
  </div>
<?php endfor; endif; ?>
</div>
<?php }?>

<div about="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" typeof="mo:Record" class="haudio">

	<div class="vcard">
		<form action='' method='post'>
        	  <div class="form-group">
		    <label for='name'>Track Name</label>
		    <input class="form-control" type='text' name='name' id='name' <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>disabled<?php }?> value='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' />
		    <p class="help-block">The name of the track</p>
	          </div>

		  <div class="form-group">
		    <label for='url'>Streaming URL</label>
		    <input class="form-control" type='text' name='streaming_url' id='streaming_url' value='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['streaming_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' />
		    <p class="help-block">A link to an Ogg Vorbis file hosted on <a href='http://archive.org'>archive.org</a></p>
		  </div>

		  <button class="btn btn-primary" type='submit' name='submit' 
			  value='<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>Edit<?php } else { ?>Create<?php }?> Track'>
		    <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>Edit<?php } else { ?>Create<?php }?> Track
		  </button>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>