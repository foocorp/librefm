<?php /* Smarty version 3.1.27, created on 2018-03-25 23:35:10
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/artist-manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10001672145ab8322eac8c59_86595847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b41b2595acaa28d0af805e42ceb997171e8da9' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/artist-manage.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10001672145ab8322eac8c59_86595847',
  'variables' => 
  array (
    'errors' => 0,
    'id' => 0,
    'homepage' => 0,
    'name' => 0,
    'bio_summary' => 0,
    'bio_content' => 0,
    'image' => 0,
    'flattr_uid' => 0,
    'albums' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab8322ec2fa44_34685835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab8322ec2fa44_34685835')) {
function content_5ab8322ec2fa44_34685835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10001672145ab8322eac8c59_86595847';
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
        <p><?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['error']['index']];?>
</p>
<?php endfor; endif; ?>
</div>
<?php }?>

<div about="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" typeof="mo:MusicArtist">

	<div class="vcard">
		<form action='' method='post'>

		  <div class="form-group">
		    <label for='homepage'>Home Page</label>
		    <input class="form-control" type='text' name='homepage' id='homepage' value='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['homepage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' />
		    <p class="help-block">A link to the <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
's website.</p>
		  </div>

		<div class="form-group">
		  <label for='bio_summary'>Short Biography</label>
		  <textarea class="form-control" name='bio_summary' id='bio_summary'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bio_summary']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
		  <p class="help-block">Provide a short summary of <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
's biography.</p>
		</div>

		<div class="form-group">
		  <label for='bio_content'>Full Biography</label>
		  <textarea class="form-control" name='bio_content' id='bio_content'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bio_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
		  <p class="help-block">Provide a more detailed biography of <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.</p>
		</div>

		<div class="form-group">
		  <label for='image'>Image</label>
		  <input class="form-control" type='text' name='image' id='image' value='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' />
		  <p class="help-block">Provide a link to an image of <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, this should be no larger than 256x256 pixels. If you need somewhere to upload your image we recommend <a href='http://imgur.com'>Imgur</a>, <a href='http://www.flickr.com'>Flickr</a> or <a href='http://www.archive.org'>Archive.org</a>.
		  </p>
		</div>

		<div class="form-group">
		  <label for='flattr_uid'>Flattr Username</label>
		  <input class="form-control" type='text' name='flattr_uid' id='flattr_uid' value='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['flattr_uid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' />
		  <p class="help-block">If you have a <a href='http://flattr.com'>flattr account</a> simply enter your flattr username and we'll automatically put flattr buttons on your artist and track pages. This way your fans will be able to show their appreciation with the occasional tip.</p>
		</div>

		<button class="btn btn-primary btn-block" type='submit' name='submit' value='Update' >Update</button>
		</form>
	</div>

	<ul>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['albums']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<?php if ($_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->name) {?>
			<li about="<?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->id;?>
" property="dc:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->name, ENT_QUOTES, 'UTF-8', true);?>
" typeof="mo:Record" class="haudio">
			<a rel="foaf:page" href="<?php echo $_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->getURL();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['albums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</li>
			<?php }?>
		<?php endfor; endif; ?>
	</ul>

	<br />

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>