{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}

{if $page->tag_name}

<div class="row">
  <div class="col-sm-2">
    <img class="img-responsive" src="{$page->tag_image}" alt="[ Tag Image ]"/>
  </div>
  <div class="col-sm-10">
    <p>
      <a class="btn btn-primary btn-xs" href="{$page->section_url}">
	<span class="glyphicon glyphicon-tag"></span>
	{$page->tag_name}
      </a>
    </p>
    <p>
      <a class="btn btn-primary btn-xs" href="{$page->tag_url}">
	<span class="glyphicon glyphicon-file"></span>
	tag page
      </a>
    </p>
  </div>
</div>

	{if $page->tagged_artists}
		<p><strong>Artists</strong> tagged with <span class="label label-default">{$page->tag_name}</span></p>
		{include file='artistlist.tpl' class=#librarytable# owner=$page->user->name items=$page->tagged_artists fimage=true fstream=true fbutton=true type='tagged'}
	{/if}
	{if $page->tagged_albums}
		<p><strong>Albums</strong> tagged with <span class="label label-default">{$page->tag_name}</span></p>
		{include file='albumlist.tpl' class=#librarytable# items=$page->tagged_albums fartist=true fimage=true fstream=true fbutton=true type='tagged'}
	{/if}
	{if $page->tagged_tracks}
		<p><strong>Tracks</strong> tagged with <span class="label label-default">{$page->tag_name}</span></p>
		{include file='tracklist.tpl' class=#librarytable# items=$page->tagged_tracks fartist=true fstream=true fbutton=true type='tagged'}
	{/if}
{else}

	{if $page->tags}
		{include file='taglist.tpl' class=#librarytable# items=$page->tags thead=true fcount=true}
	{/if}
{/if}

{include file='footer.tpl'}
