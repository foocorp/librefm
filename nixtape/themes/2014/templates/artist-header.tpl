<div id="artist-header">
  <div class="row">
    <div class="col-sm-2">
      <img class="img-responsive" {if $artist->image_medium}src="{$artist->image_medium}"{else}src="{$img_url}qm160.png"{/if}
      alt= "[ {$artist->name} photo ]"/>
    </div>
    <div class="col-sm-10">
      <h1>{$artist->name}
      </h1>
      {if $artist->getListenerCount()}
      <p>
	<span class="label label-primary">
	  <span class="glyphicon glyphicon-headphones"></span>
	  {$artist->getListenerCount()} listeners</span>
      </p>
      {/if}
      {if $artist->homepage}
      <p><a href="{$artist->homepage}">{$artist->homepage}</a></p>
      {/if}
    </div>

  </div>

  <div class="margin-top">
    {include file='submenu.tpl'}
  </div>
</div>
<br/>

