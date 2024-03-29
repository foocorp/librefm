{include file='header.tpl' subheader='user-header.tpl' showbio=true}

{if $nowplaying}
<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Now playing: </strong>
	<span class="glyphicon glyphicon-music"></span>
	<a class="alert-link" href="{$nowplaying[0].trackurl}">
	   {$nowplaying[0].track}
	</a>
	by
	<a class="alert-link" href="{$nowplaying[0].artisturl}">
	  {$nowplaying[0].artist}
	</a>
</div>
{/if}

{userscrobbles userid=$me->uniqueid  limit=10}
<h3>Recent plays</h3>
{include file="tracklist.tpl" class=#table# items=$userscrobbles fimage=true fstream=true fartist=true flove=true ftime=true}

{if !empty($lovedArtists)}
	<br />
	<h3>{t name=$me->name}Free artists that %1 loves{/t}</h3>
	<ul>
		{section name=i loop=$lovedArtists}
			<li style="display: inline"><a href='{$lovedArtists[i].pageurl}'>{$lovedArtists[i].name}</a></li>
		{/section}
	</ul>
{/if}

{if !empty($recommendedArtists)}
	<br />
	<h3>{t name=$me->name}Free artists that %1 might like{/t}</h3>
	<ul>
		{foreach from=$recommendedArtists item=artist}
			<li style="display: inline;"><a href='{$artist.url}'>{$artist.artist}</a></li>
		{/foreach}
	</ul>
{/if}

{include file='footer.tpl'}
