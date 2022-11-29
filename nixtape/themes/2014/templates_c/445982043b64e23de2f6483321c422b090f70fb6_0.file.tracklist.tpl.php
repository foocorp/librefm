<?php /* Smarty version 3.1.27, created on 2018-03-24 21:24:06
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/tracklist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9940870075ab6c1f6337d31_48496188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445982043b64e23de2f6483321c422b090f70fb6' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/tracklist.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9940870075ab6c1f6337d31_48496188',
  'variables' => 
  array (
    'class' => 0,
    'thead' => 0,
    'fstream' => 0,
    'fimage' => 0,
    'flove' => 0,
    'ftag' => 0,
    'fbutton' => 0,
    'fcount' => 0,
    'ftime' => 0,
    'items' => 0,
    'i' => 0,
    'fartist' => 0,
    'page' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1f6408528_63966691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1f6408528_63966691')) {
function content_5ab6c1f6408528_63966691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9940870075ab6c1f6337d31_48496188';
?>

<table class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 tracklist">
<?php if ($_smarty_tpl->tpl_vars['thead']->value) {?>
	<thead>
	  <tr>
		<?php if ($_smarty_tpl->tpl_vars['fstream']->value) {?>
		<th class="icon"></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fimage']->value) {?>
		<th></th>
		<?php }?>
		<th class="title">Title</th>
		<?php if ($_smarty_tpl->tpl_vars['flove']->value) {?>
		<th class="icon"></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ftag']->value) {?>
		<th class="icon"></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fbutton']->value) {?>
		<th></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fcount']->value) {?>
		<th class="count">Plays</th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ftime']->value) {?>
		<th class="time">Time</th>
		<?php }?>
	  </tr>
	</thead>
<?php }?>
	<tbody>
	<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
	<tr>
		<?php if ($_smarty_tpl->tpl_vars['fstream']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value['streamable']) {?>
		<td class="icon" title="Track is streamable">
		  <span class="glyphicon glyphicon-music"></span>
		</td>
		<?php } else { ?>
		<td class="icon"></td>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fimage']->value && $_smarty_tpl->tpl_vars['i']->value['image']) {?>
			<td class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['image'];?>
" alt="[ Track Image ]" /></td>
                <?php } elseif ($_smarty_tpl->tpl_vars['fimage']->value) {?>
			<td class="image"></td>
		<?php }?>
		<td class="name">
			<?php if ($_smarty_tpl->tpl_vars['i']->value['tracklibraryurl']) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['tracklibraryurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
</a>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['trackurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['fartist']->value) {?> by
				<?php if ($_smarty_tpl->tpl_vars['i']->value['artistlibraryurl']) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['artistlibraryurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
</a>
				<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['artisturl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
</a>
				<?php }?>
			<?php }?>
		</td>
		<?php if ($_smarty_tpl->tpl_vars['flove']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value['loved']) {?><td class="icon" title="<?php echo $_smarty_tpl->tpl_vars['page']->value->user->name;?>
 loves this track"><span class="glyphicon glyphicon-heart"></span></td><?php } else { ?><td class="icon"></td><?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ftag']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value['tagged']) {?><td class="icon" title="<?php echo $_smarty_tpl->tpl_vars['page']->value->user->name;?>
 has tagged this track"><i class="icon-tag"></i></td><?php } else { ?><td class="icon"></td><?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fbutton']->value) {?>
		<td class="buttons">
			<?php if ($_smarty_tpl->tpl_vars['page']->value->ownedbyme) {?>
				<?php if ($_smarty_tpl->tpl_vars['type']->value == 'scrobble') {?>
					<form method='post' action=''>
					  <input type=hidden name='artist' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
" />
					  <input type=hidden name='track' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
" />
					  <input type=hidden name='timestamp' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
" />
					  <button class="btn btn-danger btn-xs"
						  name='removescrobble' type='submit'>
					    remove
					  </button>
					</form>
				<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'loved') {?>
					<form method='post' action=''>
					  <input type=hidden name='artist' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
" />
					  <input type=hidden name='track' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
" />
					  <button class="btn btn-danger btn-xs" name='unlove' type='submit'>
					    remove
					  </button>
					</form>
				<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'banned') {?>
					<form method='post' action=''>
					  <input type=hidden name='artist' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
" />
					  <input type=hidden name='track' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
" />
					  <button class="btn btn-danger btn-xs" name='unban' type='submit'>
					    remove
					  </button>
					</form>
				<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'tagged') {?>
					<form method='post' action=''>
					  <input type=hidden name='removeartist' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
" />
					  <input type=hidden name='removetrack' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['track'];?>
" />
					  <input type=hidden name='removetag' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tag'];?>
" />
					  <button class="btn btn-danger btn-xs" name='trackremovetag' type='submit'>
					    remove
					  </button>
					</form>
				<?php }?>
			<?php }?>
		</td>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fcount']->value) {?>
		<td class="count">
		  <span><?php echo $_smarty_tpl->tpl_vars['i']->value['freq'];?>
</span>
		</td>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ftime']->value) {?>
		<td class="time">
		  <span class="glyphicon glyphicon-time"></span>
		    <?php echo $_smarty_tpl->tpl_vars['i']->value['timehuman'];?>

		</td>
		<?php }?>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
	</tbody>
</table>
<?php }
}
?>