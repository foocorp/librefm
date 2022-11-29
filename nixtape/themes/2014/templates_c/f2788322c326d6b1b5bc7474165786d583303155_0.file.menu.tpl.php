<?php /* Smarty version 3.1.27, created on 2018-09-17 17:52:35
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4774827215b9fe9e3a8bd62_77485108%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2788322c326d6b1b5bc7474165786d583303155' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/menu.tpl',
      1 => 1531844106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4774827215b9fe9e3a8bd62_77485108',
  'variables' => 
  array (
    'logged_in' => 0,
    'this_user' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b9fe9e3ba6948_24133534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b9fe9e3ba6948_24133534')) {
function content_5b9fe9e3ba6948_24133534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4774827215b9fe9e3a8bd62_77485108';
?>
<ul class="nav navbar-nav">
<?php if (($_smarty_tpl->tpl_vars['logged_in']->value)) {?>
        <li>

	    </a>
	</li>
<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Signed in as <span class="glyphicon glyphicon-user">
	    </span>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>$_smarty_tpl->tpl_vars['this_user']->value->name)); $_block_repeat=true; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['this_user']->value->name), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>$_smarty_tpl->tpl_vars['this_user']->value->name), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['this_user']->value->getURL();?>
">	    <span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['this_user']->value->name;?>
 <span class="badge">SUPPORTER</span></a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['this_user']->value->getURL();?>
/stats">	    <span class="glyphicon glyphicon-stats"></span> <?php echo $_smarty_tpl->tpl_vars['this_user']->value->name;?>
/stats</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['this_user']->value->getURL();?>
/recent-tracks">	    <span class="glyphicon glyphicon-headphones"></span> <?php echo $_smarty_tpl->tpl_vars['this_user']->value->name;?>
/recent</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user-export.php"><span class="glyphicon glyphicon-user"></span>  Data export</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user-delete.php"><span class="glyphicon glyphicon-user"></span>  Deleting my account</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login.php?action=logout">
	    <span class="glyphicon glyphicon-log-out">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</a></li>
	
        </ul>
      </li>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/listen.php">
	    <span class="glyphicon glyphicon-headphones"></span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</li>
        <li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/popular.php">
	    <span class="glyphicon glyphicon-flash">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popular<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</li>
<?php } else { ?>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/login.php">
	    <span class="glyphicon glyphicon-log-in">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</a>
	</li>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/listen.php">
	    <span class="glyphicon glyphicon-headphones">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</li>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/popular-page.php">
	    <span class="glyphicon glyphicon-flash">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popular<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</li>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/register.php">
	    <span class="glyphicon glyphicon-ok">
	    </span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign up<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</li>
<?php }?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/donate.php">Donate</a></li>
    <li><a href="https://git.gnu.io/foocorp/librefm/wikis/home">Get Help</a></li>
</ul>
<?php if (($_smarty_tpl->tpl_vars['logged_in']->value)) {?>
<p class="navbar-text pull-right"></p>
<?php }

}
}
?>