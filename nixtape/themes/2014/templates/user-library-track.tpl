{include file='header.tpl' subheader='user-header.tpl'}

<h2>Library</h2> {include file='submenu.tpl' submenu=$page->menu}

<div class="row">
  <div class="col-sm-2">
	<img class="img-responsive margin-top" src="{$page->artist_image}" 
	     alt="[ Track Image ]" />
  </div>
  <div class="col-sm-10">

    <h3>{$page->track->name}</h3>
    
    <p>
      by <a href="{$page->artist_library_url|escape:'html'}">{$page->artist->name}</a>
    </p>

    <a href="{$page->track_url|escape: 'html'}">Go to track page</a>
  </div>
</div>

<h4>Personalized track info here</h4>

{include file='footer.tpl'}
