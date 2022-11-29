<?php /* Smarty version 3.1.27, created on 2018-03-24 21:27:10
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20638815185ab6c2ae8394f3_39102885%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82c5bb5ac2a561b754259df103deac9462ceadf3' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/welcome.tpl',
      1 => 1444273405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20638815185ab6c2ae8394f3_39102885',
  'variables' => 
  array (
    'logged_in' => 0,
    'this_user' => 0,
    'tagcloud' => 0,
    'base_url' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c2ae886870_18073505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c2ae886870_18073505')) {
function content_5ab6c2ae886870_18073505 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20638815185ab6c2ae8394f3_39102885';
if (($_smarty_tpl->tpl_vars['logged_in']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1>Welcome back, <?php echo $_smarty_tpl->tpl_vars['this_user']->value->name;?>
</h1>

<div id="welcome-box" class="well">

  <p>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no','userurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL(),'statsurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL('stats'))); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no','userurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL(),'statsurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL('stats')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="%1">Go to your profile</a> or <a href="%2">view your listening statistics</a>.
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no','userurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL(),'statsurl'=>$_smarty_tpl->tpl_vars['this_user']->value->getURL('stats')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </p>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['tagcloud']->value)) {?>
<div id="tag-cloud-box">

  <?php echo $_smarty_tpl->getSubTemplate ('popular.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</div>
<?php }?>

<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['nosidebar'] = new Smarty_Variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Let's get you started</h1>
    <p class="lead">Share your listening habits from your phone, computer or tablet, and find similiar artists.<br />All the music on Libre.fm is freely licensed for you to stream, download and remix.</p>

    <p><a class="btn btn-success btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/register.php">1. Sign up for free &raquo;</a> &nbsp; <span class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="https://git.gnu.io/foocorp/librefm/wikis/Set-Up-Your-Music-Player" class="btn btn-primary btn-lg">2. Set up your music player &raquo;</a> &nbsp; <span class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="popular-page.php" class="btn btn-warning btn-lg">3. Track your listening &raquo;</a></p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h2>Community</h2>

      <p>The Libre.fm community is a mixture of music superfans
	and artists, where artists can share their music for
	everyone to enjoy.</p>

      <p>You can listen to a selection of the Libre.fm community's
	favourite tracks on our <a
				   href="/listen.php?station=librefm://community/loved">Community
	  Station</a>. It's made up out of a random selection of all
	the tracks that Libre.fm users have said they loved.</p>

      <p><a class="btn btn-default" href="/listen.php?station=librefm://community/loved">Listen now &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <h2>Artists</h2>

      <p>We believe we represent a good deal for artists: we only
	promote artists who choose to share their music with the
	world.</p>

      <p>In return, we allow artists to put up payment buttons and
	links to social sites and their newsletter. We automatically
	pull in notices from services such as Twitter and GNU social too.</p>

      <p><a class="btn btn-default" href="/artist-signup.php">Sign up for an artist account &raquo;</a></p>

    </div>
    <div class="col-lg-4">

    <h2>Sign up for free</h2>    
    
    <form action="/register.php" method="post">

          <?php echo $_smarty_tpl->getSubTemplate ('register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    </form>  

    </div>
  </div>



  <h2 class="text-center lead">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('site'=>$_smarty_tpl->tpl_vars['site_name']->value)); $_block_repeat=true; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 allows you to share your listening habits and discover new music.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </h2>
  <div class="text-center" id="buttons sign-up">
    <p><a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/register.php"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign up now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
  </div>
  <?php }?>
  <p class="text-center">Are you an artist? 
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/artist-signup.php">Sign up now</a> 
    to start sharing your music with our listeners!</p>

  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>