<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/sidebar-ads.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12519736345ab6c1e14340a3_84485827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24451b03afa0473c37e01bea6347e0e650bbe69' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/sidebar-ads.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12519736345ab6c1e14340a3_84485827',
  'variables' => 
  array (
    'ad' => 0,
    'base_url' => 0,
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e1454465_05725173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e1454465_05725173')) {
function content_5ab6c1e1454465_05725173 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/gnu-fm/nixtape/vendor/smarty/smarty/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '12519736345ab6c1e14340a3_84485827';
?>
<div class='sideblock'>
	<?php echo smarty_function_math(array('equation'=>'rand(0,0)','assign'=>'ad'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['ad']->value == 0) {?>
		<h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Help Support Libre.fm<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
		<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
		<p class="text-center">
			<input type='hidden' name='cmd' value='_s-xclick'> 
			<input type='hidden' name='hosted_button_id' value='RDGHE34W54T7Y'> 
			<input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!' style='width: auto;'> 
			<img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1px'> 
		</p>
		</form>
		<p class="text-center"><a href='http://flattr.com/thing/178604/Libre-fm-Share-your-listening-habits-and-discover-new-music' target='_blank'><img src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/2014/img/flattr-badge-large.png' alt='Flattr this' title='Flattr this' border='0' /></a></p>

		<p class="text-center"><a href='http://libre.fm/donate.html'><img src='<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
/bitcoin.png' alt='Donate BitCoins' title='Donate BitCoins' /></a></p>
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Help us make the GNU FM software which powers this site even better.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can find out more about our targets for this year on our <a href='http://libre.fm/donate.html'>donations page</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
</div>
<?php }
}
?>