{config_load file='theme.conf' scope='global'}
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	{if !($pagetitle)}
		<title>Libre.fm &mdash; {t}discover new music{/t}</title>
	{else}
		<title>{$pagetitle|escape:'html':'UTF-8'} &mdash; Libre.fm &mdash; {t}discover new music{/t}</title>
	{/if}
	<link rel="stylesheet" href="{$base_url}/themes/{$default_theme}/css/2010.css" type="text/css" />
	<script type="text/javascript" src="{$base_url}/js/jquery.min.js"></script>
	<script type="text/javascript" src="{$base_url}/js/jquery-ui.custom.min.js"></script>
	<script type="text/javascript" src="{$base_url}/js/jquery.placeholdr.js"></script>
	<script type="text/javascript">
		var base_url="{$base_url}";
	</script>
	<script type="text/javascript" src="{$base_url}/js/player.js"></script>
	<meta name="author" content="FooCorp catalogue number FOO200 and contributors" />
{section name=i loop=$extra_head_links}
	<link rel="{$extra_head_links[i].rel|escape:'html':'UTF-8'}" href="{$extra_head_links[i].href|escape:'UTF-8'}" type="{$extra_head_links[i].type|escape:'html':'UTF-8'}" title="{$extra_head_links[i].title|escape:'html':'UTF-8'}"  />
{/section}
</head>

<body>
	<div id="doc" class="yui-t7"> 
		<div id="hd">
			<h1><a href="{$base_url}"><img src="{$img_url}/header.png" alt="Libre.fm" /></a></h1>
			<div id='hd-border'></div>
		</div>

		<div id="bd">
			<div class="yui-g" id="navbar">
				{include file='search-box.tpl'}
				{include file='menu.tpl'}
			</div>
			<div id='sidebar'>
			{foreach from=$sideblocks item=block}
				<div class='sideblock-top'></div>
				{include file=$block}
				<div class='sideblock-bottom'></div>
			{foreachelse}
				<div class='sideblock-top'></div>
				{include file='sidebar-tips.tpl'}
				<div class='sideblock-bottom'></div>
			{/foreach}
			<div class='sideblock-top'></div>
			{include file='sidebar-ads.tpl'}
			<div class='sideblock-bottom'></div>
			</div>
			<div id="content-box-top">
				{if isset($subheader)}
					{include file="$subheader"}
				{/if}
				{if isset($pageheading)}
					<h2>{$pageheading}</h2>
				{/if}
				{include file='submenu.tpl'}
			</div>
			<div class="yui-g" id="content">
				<div id='header-spacing'></div>
