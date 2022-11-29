<?php /* Smarty version 3.1.27, created on 2018-03-24 21:38:27
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/listen.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12451577735ab6c55381ebe6_78805547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ceec65888f4b177df4423a48072a1c4599ea10d' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/listen.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12451577735ab6c55381ebe6_78805547',
  'variables' => 
  array (
    'radio_session' => 0,
    'station' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c553874a77_56155846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c553874a77_56155846')) {
function content_5ab6c553874a77_56155846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12451577735ab6c55381ebe6_78805547';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['radio_session']->value) || isset($_smarty_tpl->tpl_vars['station']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ('flattr.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('player.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id='error'></div>
<br /><br />
<div id='flattrstream' style='width: 50%; display: none;'>
  <div id='flattr'></div>
  <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hey! If you really like this artist you can show your appreciation by donating to them via <a href='http://flattr.com'>flattr</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
</div>

<?php } else { ?>
<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listen to music right here in your web browser!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To get started, simply enter the type of music you'd like to hear or select one of the common tags below:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>


<form class="well" method='get' action='' role='form'>
  <div class="form-group">
    <label for="tag"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Custom tag:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
    <input class="form-control" type="text" id="tag" name="tag" />

    <ul class="nav nav-pills">
      <li><a href="?tag=folk">Folk</a></li>
      <li><a href="?tag=rock">Rock</a></li>
      <li><a href="?tag=metal">Metal</a></li>
      <li><a href="?tag=classical">Classical</a></li>
      <li><a href="?tag=pop">Pop</a></li>
      <li><a href="?tag=blues">Blues</a></li>
      <li><a href="?tag=jazz">Jazz</a></li>
      <li><a href="?tag=punk">Punk</a></li>
      <li><a href="?tag=ambient">Ambient</a></li>
      <li><a href="?tag=electronic">Electronic</a></li>
    </ul>

  </div>
  <div class="checkbox">
    <label for="only_loved">
      <input type="checkbox" id="only_loved" name="only_loved"  />
      <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only play me songs that other people love<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </label>
  </div>
  <button class="btn btn-primary btn-lg" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
<a class="btn btn-success btn-lg" href="?station=librefm://community/loved"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 Community Station</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>


</form>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>