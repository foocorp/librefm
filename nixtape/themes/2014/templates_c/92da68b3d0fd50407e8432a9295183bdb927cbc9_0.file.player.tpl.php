<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:05
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/player.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4169980855ab6c1f5431181_08734692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92da68b3d0fd50407e8432a9295183bdb927cbc9' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/player.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4169980855ab6c1f5431181_08734692',
  'variables' => 
  array (
    'track' => 0,
    'logged_in' => 0,
    'station' => 0,
    'radio_session' => 0,
    'this_user' => 0,
    'gnufm_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1f54fd645_22796634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1f54fd645_22796634')) {
function content_5ab6c1f54fd645_22796634 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4169980855ab6c1f5431181_08734692';
?>
<div id="player">

	<audio id="audio" autobuffer>
		<?php if ($_smarty_tpl->tpl_vars['track']->value->streamurl) {?>
			<object id="fallbackembed" type="application/ogg" data="<?php echo $_smarty_tpl->tpl_vars['track']->value->streamurl;?>
"><a type="application/ogg" rel="enclosure" href="<?php echo $_smarty_tpl->tpl_vars['track']->value->streamurl;?>
">Listen to this track</a></object>
		<?php }?>
	</audio>

	<div id="loading" class="well"></div>

	<div class="player-panel" id="interface">
		<div id="infobox">
			<div id="trackinfo"><span id="artistname"></span>
				<div class="pull-right" id="timeinfo">
					<span id="currenttime"></span>/<span id="duration"></span>
				</div>
				<br />
				<span id="trackname"></span><span class="label label-info pull-right" id="scrobbled" style="display:none;">Scrobbled</span>
			</div>
			<div id="tracktags">
				<ul>
				</ul>
			</div>
		</div>
		
		<div id="progress">
			<div id="progress-slider" title="Seek to time"></div>
		</div>
	
		
		<div class="btn-toolbar" id="p_buttons" role="toolbar">
			<div class="btn-group btn-group-xs">

				<a class="btn btn-default" id="play"><span class="glyphicon glyphicon-play"  alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Play<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Play<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="pause"><span class="glyphicon glyphicon-pause" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pause<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pause<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="skipback"><span class="glyphicon glyphicon-step-backward" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Skip Backwards<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Skip Backwards<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="skipforward"><span class="glyphicon glyphicon-step-forward" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Skip Forwards<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Skip Forwards<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
			</div>
			<div  class="btn-group btn-group-xs">
			<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<a class="btn btn-default" id="ban"><span class="glyphicon glyphicon-ban-circle" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ban<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ban<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>

				<a class="btn btn-default" id="open_tag"><span class="glyphicon glyphicon-tag" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="close_tag"><span class="glyphicon glyphicon-tag" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="love"><span class="glyphicon glyphicon-heart" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Love<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Love<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
			<?php }?>
			</div>
			<div class="btn-group btn-group-xs pull-right">
				<a class="btn btn-default" id="volume"><span class="glyphicon glyphicon-volume-up" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Volume<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Volume<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>

				<a class="btn btn-default" id="hideplaylist"><span class="glyphicon glyphicon-list" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Playlist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Playlist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>
				<a class="btn btn-default" id="showplaylist"><span class="glyphicon glyphicon-list" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Playlist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Playlist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></span></a>

			</div>
		</div>
	
		<div id="volume-box">
			<div id="volume-slider"></div>
		</div>
		
		<div id="tagbox">
			<form id="tag_input">
			    <label><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag this track:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			    <div class="input-group input-group-sm">
			      <input class="form-control" type='text' id='tags' name='tags' placeholder='guitar, violin, female vocals'/>
			      <span class="input-group-btn">
				<button class="btn btn-default" id='tag_button'>
				  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</button>
			      </span>
			    </div>
			</form>
		</div>

		<div id="playlist">
			<ul class="list-unstyled" id="songs">
			</ul>
		</div>

	<p><a id="dlbutton" href="<?php echo $_smarty_tpl->tpl_vars['track']->value->streamurl;?>
" class="btn btn-success" download>Download track</a></p>

	</div>
	<br />





	<div class="alert alert-danger" id="problems">
		<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array('escape'=>'no')); $_block_repeat=true; echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The player currently works in <a class="alert-link" href='http://www.chromium.org/Home'>Chromium</a> and <a class="alert-link" href='http://www.gnu.org/software/gnuzilla/'>Icecat</a>/<a class="alert-link" href='http://www.mozilla.org/en/firefox/'>Firefox</a> or later &mdash; it may also work in Chrome and Opera, though we don't recommend them.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array('escape'=>'no'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		<?php if ($_smarty_tpl->tpl_vars['station']->value == 'track') {?>
			var playlist = [{"artist" : "<?php echo strtr($_smarty_tpl->tpl_vars['track']->value->artist_name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "album" : "<?php echo strtr($_smarty_tpl->tpl_vars['track']->value->album_name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "track" : "<?php echo strtr($_smarty_tpl->tpl_vars['track']->value->name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "url" : "<?php echo $_smarty_tpl->tpl_vars['track']->value->streamurl;?>
"}];
			var radio_session = false;
			var station = false;
		<?php } else { ?>
			var playlist = false;
			var radio_session = "<?php echo $_smarty_tpl->tpl_vars['radio_session']->value;?>
";
			var station = "<?php echo $_smarty_tpl->tpl_vars['station']->value;?>
";
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['this_user']->value)) {?>
		playerInit(playlist, "<?php echo $_smarty_tpl->tpl_vars['this_user']->value->getWebServiceSession();?>
", false, station, "<?php echo $_smarty_tpl->tpl_vars['gnufm_key']->value;?>
");
		<?php } else { ?>
		playerInit(playlist, false, radio_session, false, "<?php echo $_smarty_tpl->tpl_vars['gnufm_key']->value;?>
");
		<?php }?>
	});
<?php echo '</script'; ?>
>
<?php }
}
?>