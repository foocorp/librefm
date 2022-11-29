{include file='header.tpl' subheader='track-header.tpl'}

<br />
{if $page->tags}
<div style="clear:both;">
	<ul class="inline">
		{foreach $page->tags as $i}
			{if $i@index < 5}
				<li style="padding:0px; margin:0px;"><a class="label label-info">{$i.tag}</a></li>
			{else}
				<li style="padding:0px; margin:0px;display:none;"><a class="label label-info">{$i.tag}</a></li>
			{/if}
		{/foreach}
	</ul>
</div>
{/if}

{include file='footer.tpl' sideplayer=true}

