<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:49
         compiled from "/var/gnu-fm/nixtape/themes/gnufm/templates/api_auth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14553115775ab6c221bb87c8_94080851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da978a5be8604b8bed41d61a291533e694707ab' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/gnufm/templates/api_auth.tpl',
      1 => 1414098745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14553115775ab6c221bb87c8_94080851',
  'variables' => 
  array (
    'error_msg' => 0,
    'stage' => 0,
    'username' => 0,
    'clientname' => 0,
    'clienturl' => 0,
    'api_key' => 0,
    'cb' => 0,
    'logged_in' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c221bff264_31264030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c221bff264_31264030')) {
function content_5ab6c221bff264_31264030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14553115775ab6c221bb87c8_94080851';
echo $_smarty_tpl->getSubTemplate ('mini-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['stage']->value == 'deskapp2.2') {?>
	<p>Thank you very much <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
. Your authorization has been recorded.</p>
	<p>You may now close this page.</p>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['username']->value) {?><h3>Hello <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['clientname']->value == 'Unknown client') {?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['clienturl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
</a> with<br /> API key: <b><?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
</b><br />
		<?php if ($_smarty_tpl->tpl_vars['cb']->value) {?>
			Callback URL: <b><?php echo $_smarty_tpl->tpl_vars['cb']->value;?>
</b><br />
		<?php }?>
	<?php } else { ?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['clienturl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clientname']->value;?>
</a>
	<?php }?>
	wants your permission to talk with this service.</p>
	<form method="post" action="">
		<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value) {?>
		<p>Your Username: <input type="text" name="username" /></p>
		<p>Your Password: <input type="password" name="password" /></p>
		<p>
		<?php }?>
		<input type="submit" value="Submit" />
		<input type="hidden" name="api_key" value="<?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
" />
		<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
		<?php if ($_smarty_tpl->tpl_vars['cb']->value) {?>
			<input type="hidden" name="cb" value="<?php echo $_smarty_tpl->tpl_vars['cb']->value;?>
" />
		<?php }?>
		</p>
	</form>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('mini-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>