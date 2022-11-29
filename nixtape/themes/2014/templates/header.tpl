{config_load file='theme.conf' scope='global'}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	{if !($pagetitle)}
	<title>{$site_name}</title>
	{else}
	<title>{$pagetitle|escape:'html':'UTF-8'} &mdash; {$site_name}</title>
	{/if}
	<link rel="stylesheet" href="{$base_url}/themes/{$default_theme}/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="{$base_url}/themes/{$default_theme}/css/custom.css" type="text/css" />
	<!--<link rel="stylesheet" href="{$base_url}/themes/{$default_theme}/css/kaboot.css" type="text/css" /> -->
	<script type="text/javascript" src="{$base_url}/themes/{$default_theme}/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="{$base_url}/js/jquery-ui.custom.min.js"></script>
	<script type="text/javascript" src="{$base_url}/themes/{$default_theme}/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var base_url="{$base_url}";
	</script>
	<script type="text/javascript" src="{$base_url}/js/player.js"></script>
	<meta name="author" content="FooCorp catalogue number FOO200 and contributors" />
{section name=i loop=$extra_head_links}
	<link rel="{$extra_head_links[i].rel|escape:'html':'UTF-8'}" href="{$extra_head_links[i].href|escape:'UTF-8'}" type="{$extra_head_links[i].type|escape:'html':'UTF-8'}" title="{$extra_head_links[i].title|escape:'html':'UTF-8'}"  />
{/section}
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
  <div id="wrapper">
  <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".gfm-navbar-collapse">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>
	  <a id="title" class="navbar-brand" href="{$base_url}">{$site_name}</a>
	</div>
	<nav class="collapse navbar-collapse gfm-navbar-collapse" role="navigation">
	  {include file='menu.tpl'}
	  {include file='search-box.tpl'}
	</nav>
      </div>
  </header>
				{if $nosidebar}
                                <!-- nosb -->
				{else}
                                <div class="container" id="content">
		                  <div class="row">
		                    <article>
				      <div class="col-sm-8">
					<header>
						{if isset($subheader)}
							{include file="$subheader"}
						{/if}
					</header>
					<section>
				{/if}
