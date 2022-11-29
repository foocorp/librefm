<?php /* Smarty version 3.1.27, created on 2021-01-19 20:03:01
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/donate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24025317360073af5d324e2_04293028%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '246c7f447dfdfaca3614662a97e89052e2ecb5a2' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/donate.tpl',
      1 => 1566917547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24025317360073af5d324e2_04293028',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60073af5d52176_26807238',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60073af5d52176_26807238')) {
function content_60073af5d52176_26807238 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24025317360073af5d324e2_04293028';
$_smarty_tpl->tpl_vars['nosidebar'] = new Smarty_Variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container">
      <div class="row">
        <div class="col-md-3">
	&nbsp;
	</div>
	<div class="col-md-6">
	
	  <h2>Please donate to keep Libre.fm alive</h2>

	  <p>Bitcoin: <a href="bitcoin:1H9b5XiLeMnXzfxysqKJf9tn6ysWSH5TCT?label=Libre.fm%20donations%202014">1H9b5XiLeMnXzfxysqKJf9tn6ysWSH5TCT</a></p>

	  <h3>PayPal</h3>

	  <p>You can make a one-time donation or set up a monthly recurring donation to Libre.fm.</p>

	  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	    <input type="hidden" name="cmd" value="_s-xclick">
	    <input type="hidden" name="hosted_button_id" value="9PTTFVFY4ETFE">
	    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	  </form>

	  <h4>Monthly recurring donation</h4>

	  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	    <input type="hidden" name="cmd" value="_s-xclick">
	    <input type="hidden" name="hosted_button_id" value="Q5PEP4MQWPY3J">
	    <table>
	      <tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
		<option value="$5">$5 : $5.00 USD - monthly</option>
		<option value="$10">$10 : $10.00 USD - monthly</option>
		<option value="$25">$25 : $25.00 USD - monthly</option>
	      </select> </td></tr>
	    </table>
	    <input type="hidden" name="currency_code" value="USD">
	    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	  </form>

        </div>

	<div class="col-md-3">
	&nbsp;
	</div>
      </div>

      <hr class="featurette-divider">

    <p><a class="btn btn-success btn-lg" href="register.php">Sign up for your free Libre.fm account &raquo;</a></p>

      <!-- /END THE FEATURETTES -->
<?php }
}
?>