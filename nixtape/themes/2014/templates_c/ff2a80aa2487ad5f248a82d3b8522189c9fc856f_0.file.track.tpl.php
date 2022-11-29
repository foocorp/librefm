<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:44
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/track.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19135360455ab6c1e0e69404_37392729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2a80aa2487ad5f248a82d3b8522189c9fc856f' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/track.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19135360455ab6c1e0e69404_37392729',
  'variables' => 
  array (
    'flattr_uid' => 0,
    'track' => 0,
    'trackalbums' => 0,
    'img_url' => 0,
    'duration' => 0,
    'logged_in' => 0,
    'isloved' => 0,
    'tagcloud' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e111a687_97494063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e111a687_97494063')) {
function content_5ab6c1e111a687_97494063 ($_smarty_tpl) {
if (!is_callable('smarty_function_trackalbums')) require_once '/var/gnu-fm/nixtape//themes/2014/plugins/function.trackalbums.php';

$_smarty_tpl->properties['nocache_hash'] = '19135360455ab6c1e0e69404_37392729';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'track-header.tpl'), 0);
?>

<br />

<?php if ($_smarty_tpl->tpl_vars['flattr_uid']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('flattr.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('flattr-track-button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h4>Appears on</h4>
<?php echo smarty_function_trackalbums(array('artist'=>$_smarty_tpl->tpl_vars['track']->value->artist_name,'track'=>$_smarty_tpl->tpl_vars['track']->value->name),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('albumlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>$_smarty_tpl->getConfigVariable( 'table'),'items'=>$_smarty_tpl->tpl_vars['trackalbums']->value,'fimage'=>true,'fstream'=>true,'ftime'=>true), 0);
?>


	<?php if ($_smarty_tpl->tpl_vars['track']->value->licenseurl && $_smarty_tpl->tpl_vars['track']->value->license) {?>
	<p id='license'><a rel=":license" href="<?php echo $_smarty_tpl->tpl_vars['track']->value->licenseurl;?>
"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
/licenses/<?php echo $_smarty_tpl->tpl_vars['track']->value->license;?>
.png" alt= "[ Track License ]"/></a></p>
	<?php }?>
	
	<ul class="list-inline">
		<?php if (!empty($_smarty_tpl->tpl_vars['track']->value->duration)) {?><li property="mo:durationXSD" datatype="xsd:duration" content="PT<?php echo $_smarty_tpl->tpl_vars['track']->value->duration;?>
S">Duration: <?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
</li><?php }?>
		<li property="rdfs:comment"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Playcount <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['track']->value->getPlayCount();?>
</span></li>
		<li property="rdfs:comment"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listeners <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['track']->value->getListenerCount();?>
</span></li>
	</ul>

	<?php if ($_smarty_tpl->tpl_vars['track']->value->streamable) {?>
	<?php if ($_smarty_tpl->tpl_vars['track']->value->downloadurl) {?>
	<p>
	  <a class="btn btn-primary btn-xs" href='<?php echo $_smarty_tpl->tpl_vars['track']->value->downloadurl;?>
'>
	    <span class="glyphicon glyphicon-download-alt"></span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['track']->value->streamurl) {?>
	<p>
	  <a class="btn btn-primary btn-xs" href='<?php echo $_smarty_tpl->tpl_vars['track']->value->streamurl;?>
'>
	    <span class="glyphicon glyphicon-download-alt"></span>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	  </a>
	</p>
	<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
	   <?php if ($_smarty_tpl->tpl_vars['isloved']->value) {?>
               <form action='' method='post'>
		 <button class="btn btn-danger btn-xs"
			 type='submit' name='unlove' id='unlove' value='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unlove this track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'>
		   <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unlove this track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		 </button>
	       </form>
	   <?php } else { ?>
	       <form action='' method='post'>
		 <button class="btn btn-danger btn-xs" type='submit' name='love' id='love'
			 value='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Love this track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'>
		   <span class="glyphicon glyphicon-heart"></span>
		   <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Love this track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		 </button>
	       </form>
          <?php }?>
       <?php }?>



	<?php if (!empty($_smarty_tpl->tpl_vars['tagcloud']->value)) {?>
		<h3 class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tags used to describe this track<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
		<ul class="tagcloud">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tagcloud']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<li style='font-size:<?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['size'];?>
'><a href='<?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pageurl'];?>
' title='<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('uses'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count'])); $_block_repeat=true; echo smarty_block_t(array('uses'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This tag was used %1 times<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('uses'=>$_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' rel='tag'><?php echo $_smarty_tpl->tpl_vars['tagcloud']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
		<?php endfor; endif; ?>
		</ul>
	<?php }?>
	<br />


<?php if ($_smarty_tpl->tpl_vars['track']->value->streamable) {?>
	<?php $_smarty_tpl->tpl_vars['streamable'] = new Smarty_Variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sideplayer'=>true,'station'=>'track'), 0);
?>

<?php }
}
?>