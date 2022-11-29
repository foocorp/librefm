{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}

{include file='paginate.tpl'}
<h3>Artists</h3>
{if $page->artists}
	{include file='artistlist.tpl' class=#librarytable# items=$page->artists thead=true fstream=true fimage=true fcount=true}
{/if}
{include file='paginate.tpl'}

{if $page->streamable}
	<a class="btn btn-primary btn-sm" href="{$page->urls.streamable}">All artists</a>
{else}
	<a class="btn btn-primary btn-sm" href="{$page->urls.streamable}">Streamable artists</a>
{/if}

{include file='footer.tpl'}
