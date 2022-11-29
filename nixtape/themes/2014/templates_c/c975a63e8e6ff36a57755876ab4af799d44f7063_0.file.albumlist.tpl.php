<?php /* Smarty version 3.1.27, created on 2018-03-24 21:23:45
         compiled from "/var/gnu-fm/nixtape/themes/2014/templates/albumlist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12056076645ab6c1e12f4d26_41504314%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c975a63e8e6ff36a57755876ab4af799d44f7063' => 
    array (
      0 => '/var/gnu-fm/nixtape/themes/2014/templates/albumlist.tpl',
      1 => 1440726329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12056076645ab6c1e12f4d26_41504314',
  'variables' => 
  array (
    'class' => 0,
    'thead' => 0,
    'fstream' => 0,
    'fimage' => 0,
    'fbutton' => 0,
    'fcount' => 0,
    'items' => 0,
    'i' => 0,
    'fartist' => 0,
    'page' => 0,
    'type' => 0,
    'ftime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab6c1e137e748_69426147',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab6c1e137e748_69426147')) {
function content_5ab6c1e137e748_69426147 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12056076645ab6c1e12f4d26_41504314';
?>

<table class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 albumlist">
<?php if ($_smarty_tpl->tpl_vars['thead']->value) {?>
	<thead><tr>
		<?php if ($_smarty_tpl->tpl_vars['fstream']->value) {?>
		<th class="icon"></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fimage']->value) {?>
		<th></th>
		<?php }?>
		<th class="title">Title</th>
		<?php if ($_smarty_tpl->tpl_vars['fbutton']->value) {?>
		<th class="buttons"></th>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fcount']->value) {?>
		<th class="count">Plays</th>
		<?php }?>
	</thead>
<?php }?>
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
		<td class="icon" title="Album has streamable tracks">
		  <span class="glyphicon glyphicon-music"></span>
		</td>
		<?php } else { ?>
		<td class="icon">
		</td>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fimage']->value && $_smarty_tpl->tpl_vars['i']->value['image']) {?>
		    <td class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['image'];?>
" alt="[ Album Image ]"/></td>
               <?php } elseif ($_smarty_tpl->tpl_vars['fimage']->value) {?>
                   <td class="image"></td>
		<?php }?>
		<td class="name">
			<?php if ($_smarty_tpl->tpl_vars['i']->value['albumlibraryurl']) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['albumlibraryurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['album'];?>
</a>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['albumurl'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['album'];?>
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
		<?php if ($_smarty_tpl->tpl_vars['fbutton']->value) {?>
			<td class="buttons">
				<?php if ($_smarty_tpl->tpl_vars['page']->value->ownedbyme) {?>
					<?php if ($_smarty_tpl->tpl_vars['type']->value == 'tagged') {?>
					<form method='post' action=''><input type=hidden name='removeartist' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['artist'];?>
" /><input type=hidden name='removealbum' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['album'];?>
" /><input type=hidden name='removetag' value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tag'];?>
" /><button name='albumremovetag' type='submit'>remove</button></form>
					<?php }?>
				<?php }?>
			</td>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['fcount']->value) {?>
		<td class="count"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['freq'];?>
</span></td>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ftime']->value) {?>
		<td class="time"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['timehuman'];?>
</span></td>
		<?php }?>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
</table>
<?php }
}
?>