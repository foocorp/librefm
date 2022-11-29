<div id="track-header">
  <div class="row">
    <div class="col-sm-2">
    <img class="img-responsive" {if $artist->image_small} src="{$artist->image_small}"
    {else} src="{$img_url}/qm160.png" {/if}  alt="[ Track Image ]"/>
    </div>
    <div class="col-sm-10">
	<h1>
	  {$track->name}
	</h1>
	<p>by <a href="{$artist->getURL()}">{$artist->name}</a></p>
    </div>
  </div>
  <div class="margin-top">
    {include file='submenu.tpl'}
  </div>
</div>
