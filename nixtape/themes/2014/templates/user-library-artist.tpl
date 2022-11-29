{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}

<div class="row">
  <div class="col-sm-2">
    <img class="img-responsive margin-top" src="{$page->artist_image}" 
	 alt="[ Artist Photo  ]"/>
  </div>
  <div class="col-sm-10">

    <h3>{$page->artist->name}</h3>
    {if $page->artist->homepage}
    <p>
      <small>
	<a href="{$page->artist->homepage}">
	  {$page->artist->homepage}
	</a>
      </small> 
    </p>
    {/if}
     <p><a href="{$page->artist_url}">Go to artist page</a></p>
  </div>
</div>

<p class="margin-top">
  <a href="{$page->section_url|escape:'html'}">
    <span class="glyphicon glyphicon-chevron-left">
    </span>
    Show all Artists
  </a>
</p>

{if $page->albums}
	<h4>Albums by this artist</h4>
	{include file='albumlist.tpl' class=#librarytable# items=$page->albums thead=true fimage=true fcount=true fstream=true}
{/if}

{if $page->tracks}
	<h4>Tracks by this artist</h4>
	{include file='tracklist.tpl' class=#librarytable# items=$page->tracks thead=true fstream=true flove=true ftag=true fcount=true}
{/if}

{include file='footer.tpl'}
