<?php /* Smarty version 3.1.27, created on 2021-01-19 19:11:07
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25501734860072ecbc02ef8_42460925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca6ca1be01037caa04414ad1c4d5d592a605511' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/footer.tpl',
      1 => 1611083464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25501734860072ecbc02ef8_42460925',
  'variables' => 
  array (
    'nosidebar' => 0,
    'sideplayer' => 0,
    'site_name' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60072ecbc2af56_67486377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60072ecbc2af56_67486377')) {
function content_60072ecbc2af56_67486377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25501734860072ecbc02ef8_42460925';
?>
					</section>
				</div>
			</article>
		<?php if ($_smarty_tpl->tpl_vars['nosidebar']->value != true) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('player'=>$_smarty_tpl->tpl_vars['sideplayer']->value), 0);
?>

		<?php }?>
	</div>

</div>
</div>
<div id="footer">

     <div class="container margin-top">
		<?php echo $_smarty_tpl->getSubTemplate ('language-selector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br />

	<p class="text-muted"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 is powered by the <a href="http://www.gnu.org/software/fm">GNU FM</a> <a href="https://www.gnu.org/philosophy/free-sw.html">free software</a> system &mdash; <a href="https://git.gnu.io/gnu/gnu-fm">take it</a>, run your own site and <a href="https://gnu.io/fm/developers/">join the development community!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('site'=>$_smarty_tpl->tpl_vars['site_name']->value,'escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>.</p>

     </div>

     <div id="bigv">

     <p class="text-center"><a href="http://bigv.io"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/themes/2014/img/bigv.png" /></a></p>

     <p class="text-center text-muted">Libre.fm is supported by <a href="http://bytemark.co.uk">Bytemark</a>, <a href="http://bigv.io">BigV</a>, <a href="http://archive.org">The Internet Archive</a> and <a href="http://isc.org">ISC</a></p>

<p class="text-center text-muted"><small>For help regarding removal of accounts, data export and more please contact <a href="http://mat.tl">Matt Lee</a>.</small></p>

     <hr />

     <div style="height: 10px; background: purple;">&nbsp;</div>

     </div>

</div>
</body>
</html>
<?php }
}
?>