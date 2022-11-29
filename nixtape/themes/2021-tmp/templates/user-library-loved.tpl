{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}


{include file='paginate.tpl'}
{if $page->loved_tracks}
	{include file='tracklist.tpl' class=#librarytable# items=$page->loved_tracks thead=true fstream=true flove=true fartist=true ftime=true fbutton=true type='loved'}
{/if}
{include file='paginate.tpl'}

{include file='footer.tpl'}
