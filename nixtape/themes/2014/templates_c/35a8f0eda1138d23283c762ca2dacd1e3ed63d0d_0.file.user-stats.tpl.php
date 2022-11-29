<?php /* Smarty version 3.1.27, created on 2018-03-24 21:38:24
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/user-stats.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16181192675ab6c5505dd5a5_82587973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35a8f0eda1138d23283c762ca2dacd1e3ed63d0d' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/user-stats.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16181192675ab6c5505dd5a5_82587973',
  'variables' => 
  array (
    'base_url' => 0,
    'totaltracks' => 0,
    'me' => 0,
    'timeperiod' => 0,
    'topartistspx' => 0,
    'toptrackspx' => 0,
    'graphtopartists' => 0,
    'graphtoptracks' => 0,
    'graphplaysbydays' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c55065e329_47268953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c55065e329_47268953')) {
function content_5ab6c55065e329_47268953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16181192675ab6c5505dd5a5_82587973';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subheader'=>'user-header.tpl'), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/stats/user.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery.jqplot.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/plugins/jqplot.barRenderer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/plugins/jqplot.categoryAxisRenderer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/plugins/jqplot.dateAxisRenderer.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/plugins/jqplot.pointLabels.min.js"><?php echo '</script'; ?>
>

<ul>
	<li><a href="#stats_by_artist"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Most played artists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
	<li><a href="#stats_by_track"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Top tracks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
	<li><a href="#stats_by_day"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Scrobbles by day<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
</ul>


<h3>Total tracks: <?php echo $_smarty_tpl->tpl_vars['totaltracks']->value;?>
</h3>

<h4 id="stats_by_artist"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1's most played artists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['timeperiod']->value;?>
</h4>
<div id="chart_top_artists" style="height:<?php echo $_smarty_tpl->tpl_vars['topartistspx']->value;?>
px;width:95%;"
     class="chart_space horizontal_chart_axes" about="<?php echo $_smarty_tpl->tpl_vars['me']->value->id;?>
"></div>

<h4 id="stats_by_track"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1's top tracks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['timeperiod']->value;?>
</h4>
<div id="chart_top_tracks" style="height:<?php echo $_smarty_tpl->tpl_vars['toptrackspx']->value;?>
px;width:95%;"
     class="chart_space horizontal_chart_axes" about="<?php echo $_smarty_tpl->tpl_vars['me']->value->id;?>
"></div>

<h4 id="stats_by_day"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1's scrobbles by day<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('name'=>htmlspecialchars($_smarty_tpl->tpl_vars['me']->value->name, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
<div id="chart_plays_by_days" style="height:400px;width:95%;"
     class="chart_space" about="<?php echo $_smarty_tpl->tpl_vars['me']->value->id;?>
"></div>

<?php echo '<script'; ?>
 type="text/javascript">
	var artists = <?php echo $_smarty_tpl->tpl_vars['graphtopartists']->value->artists;?>
;
	var artists_data = <?php echo $_smarty_tpl->tpl_vars['graphtopartists']->value->artists_data;?>
;
	var artists_ti = <?php echo $_smarty_tpl->tpl_vars['graphtopartists']->value->tick_interval;?>
;
	var artists_max = <?php echo $_smarty_tpl->tpl_vars['graphtopartists']->value->max_x_axis;?>
;
	var tracks = <?php echo $_smarty_tpl->tpl_vars['graphtoptracks']->value->tracks;?>
;
	var tracks_data = <?php echo $_smarty_tpl->tpl_vars['graphtoptracks']->value->tracks_data;?>
;
	var tracks_ti = <?php echo $_smarty_tpl->tpl_vars['graphtoptracks']->value->tick_interval;?>
;
	var tracks_max = <?php echo $_smarty_tpl->tpl_vars['graphtoptracks']->value->max_x_axis;?>
;
	var date_data = <?php echo $_smarty_tpl->tpl_vars['graphplaysbydays']->value->plays_by_days;?>
;
	/* Chart Formatting */
	var def_bar_width = 18;
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>