<?php /* Smarty version 3.1.27, created on 2018-03-25 03:51:26
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/artist-signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12966853185ab71cbe995380_12280229%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a1f2fad88b8897f9e638a7d1448cb239593873' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/artist-signup.tpl',
      1 => 1444273405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12966853185ab71cbe995380_12280229',
  'variables' => 
  array (
    'logged_in' => 0,
    'creating' => 0,
    'already_exists' => 0,
    'managers' => 0,
    'base_url' => 0,
    'artist' => 0,
    'created' => 0,
    'too_popular' => 0,
    'reject_artist' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab71cbea53ce9_24798083',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab71cbea53ce9_24798083')) {
function content_5ab71cbea53ce9_24798083 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12966853185ab71cbe995380_12280229';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (($_smarty_tpl->tpl_vars['logged_in']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['creating']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['already_exists']->value) {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['managers']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
We already have an artist by that name and they're already managed by:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['managers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<li><a href='<?php echo $_smarty_tpl->tpl_vars['managers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getURL();?>
'><?php echo $_smarty_tpl->tpl_vars['managers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->name;?>
</a></li>
				<?php endfor; endif; ?>
				</ul>

				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If you believe these users shouldn't be managing this artist please <a href='https://git.gnu.io/foocorp/librefm/issues/new'>raise a support ticket in our bug tracker</a> and we'll check in to it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Otherwise please <a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/artist-signup.php'>try again</a> with a new artist name.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
			<?php } else { ?>
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no','artisturl'=>$_smarty_tpl->tpl_vars['artist']->value->getURL())); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no','artisturl'=>$_smarty_tpl->tpl_vars['artist']->value->getURL()), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
We already have an artist by that name, but they're currently not being managed by anyone. Does <a href='%1' target='_blank'>this</a> look like you?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no','artisturl'=>$_smarty_tpl->tpl_vars['artist']->value->getURL()), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
				<form method='post' action=''>
				  <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['artist']->value->name;?>
' name='artist_name' />
				  <button class="btn btn-primary" type='submit' value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Yes, that's me!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name='confirm_artist' />
				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Yes, that's me!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				  </button>
				  <button class="btn btn-primary" type='submit' value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No, that's not me.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name='reject_artist' />
				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No, that's not me.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				  </button>
				</form>
			<?php }?>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['created']->value) {?>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no','managementurl'=>$_smarty_tpl->tpl_vars['artist']->value->getManagementURL())); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no','managementurl'=>$_smarty_tpl->tpl_vars['artist']->value->getManagementURL()), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Awesome, you're all ready to start sharing your music! To get started head over to your <a href='%1'>artist management page</a> and start filling in a few details about yourself.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no','managementurl'=>$_smarty_tpl->tpl_vars['artist']->value->getManagementURL()), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['too_popular']->value) {?>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wow, you're pretty popular! To make sure you're really associated with this band we're going to have to do some extra checks before enabling your artist account. If you're on Jamendo we'll typically send you a message there to check, otherwise we'll try to send an e-mail to the address on your band's website. Once that's all sorted we'll send you an e-mail letting you know that your account is ready for you!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['reject_artist']->value) {?>
			<p class="text-center"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, in that case you'll have to pick a new name.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></p>
		<?php }?>
		<form method='post' action=''>
		  <div class="form-group">
		    <label for="artist_name">
		      <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artist name:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		    </label>
		    <input class="form-control" type='text' name='artist_name' id='artist_name' />
		    <p class="help-block">
		      <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To start off just let us know the name that you like to perform under:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		    </p>
		  </div>
		  <button class="btn btn-primary" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create artist account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
		    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create artist account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		  </button>
		</form>
	<?php }?>
<?php } else { ?>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Before creating an artist account you first need to <a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/register.php'>register</a> or <a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login.php'>log in</a> with a normal %1 account.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>