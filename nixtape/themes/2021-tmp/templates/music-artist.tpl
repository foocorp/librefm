{include file='header.tpl' subheader='artist-header.tpl' showbio=true}

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

	<h4>{t}Albums by this artist{/t}</h4> todo: most recent, hide if too many
	{if $page->albums}
		{include file='albumlist.tpl' class=#librarytable# items=$page->albums fstream=true fimage=true ftime=true}
	{/if}
{*	{if $add_album_link}<a href='{$add_album_link}'><strong>[{t}Add new album{/t}]</strong></a>{/if}*}

	<h4>{t}Tracks by this artist{/t}</h4> todo: top tracks, hide if too many
	{if $page->tracks}
		{include file='tracklist.tpl' class=#librarytable# items=$page->tracks fstream=true fimage=true}
	{/if}

{include file='footer.tpl' sideplayer=true}

