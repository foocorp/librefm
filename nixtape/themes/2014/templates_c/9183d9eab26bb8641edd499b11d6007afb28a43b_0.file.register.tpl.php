<?php /* Smarty version 3.1.27, created on 2018-03-24 21:48:07
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18770072265ab6c7973e5558_05754402%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9183d9eab26bb8641edd499b11d6007afb28a43b' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/register.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18770072265ab6c7973e5558_05754402',
  'variables' => 
  array (
    'activated' => 0,
    'base_url' => 0,
    'registered' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c797434ab5_29186427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c797434ab5_29186427')) {
function content_5ab6c797434ab5_29186427 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18770072265ab6c7973e5558_05754402';
if (isset($_smarty_tpl->tpl_vars['activated']->value)) {?>
<?php $_smarty_tpl->tpl_vars['nosidebar'] = new Smarty_Variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="jumbotron">
      <div class="container">
        <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You're in!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your account has been activated! You may now login!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login.php">login!</a></p>
      </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php } elseif (isset($_smarty_tpl->tpl_vars['registered']->value)) {?>
<?php $_smarty_tpl->tpl_vars['nosidebar'] = new Smarty_Variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="jumbotron">
      <div class="container">
        <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Go! Go! Go! Check your email now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please follow the link in your email to activate your account!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
      </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('mini-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <div class="container">

      <h1 class="text-center">Sign up for a free account</h1>

      <form class="form-signin" method="post" action=''>

      	<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
            <div class="alert alert-danger alert-dismissable">
	      <button type="button" class="close" data-dismiss="alert"
	      aria-hidden="true">&times;</button>
	      <p id='errors'><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
	    </div>	
	<?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ('register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


      </form>

      	<p class="text-center"><small><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
We won't sell, swap or give away your email address. You can optionally include personal data on your profile, which is displayed publicly.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></p>

 </div>	

  </div> <!-- end of column -->
</div>	<!-- end of row -->
<?php echo $_smarty_tpl->getSubTemplate ('mini-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php }
}
?>