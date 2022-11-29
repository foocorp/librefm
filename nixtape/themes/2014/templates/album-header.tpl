<div id="album-header">

  <div class="row">
    <div class="col-sm-2">
	<img class="img-responsive"
	     {if $album->image}src="{$album->image}"{else}src="{$img_url}/qm160.png"{/if}
	alt="[ Album Image ]" />
    </div>
    <div class="col-sm-10">
    <h2>
      {$album->name}
    </h2>
    <p>by <a href="{$artist->getURL()}">{$artist->name}</a></p>
    {if $album->releasedate}
    <p>Released on {$album->releasedate|date_format:"%Y-%m-%d"}</p>
    {/if}
    </div>
  </div>
  <div class="margin-top">
    {include file='submenu.tpl'}
  </div>
</div>
<br />
