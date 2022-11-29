{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}

<div class="row">
  <div class="col-sm-2">
    <img class="img-responsive margin-top" src="{$page->album_image}" 
	 alt="[ Album Image ]"/>

  </div>
  <div class="col-sm-10">
    <h3>{$page->album->name}</h3>
    <p>
      by 
      <a href="{$page->artist_library_url|escape:'html'}">
	{$page->artist->name}</a>
    </p>
    <p> 
      <a href="{$page->album_url|escape:'html'}">Go to album page</a>
    </p>
  </div>
</div>

{if $page->tracks}
	<h4>Tracks on this album</h4>
	{include file='tracklist.tpl' class=#librarytable# items=$page->tracks thead=true fstream=true flove=true ftag=true fcount=true}
{/if}

{include file='footer.tpl'}
