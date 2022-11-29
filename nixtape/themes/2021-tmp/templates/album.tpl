{include file='header.tpl' subheader='album-header.tpl'}
<br/><br/>

<h4>Tracks</h4>
{artisttracks artist=$album->artist_name album=$album->name}
{include file='tracklist.tpl' class=#table# items=$artisttracks fstream=true}
{if $add_track_link}<a href='{$add_track_link}'><strong>{t}Add new track{/t}</strong></a>{/if}

{* Hack to get an album player for now, $album->isStreamable() would be better *}
{if $artisttracks[0].streamable}
	{$streamable = true}
	{$album_station = "librefm://artist/{$album->artist_name}/album/{$album->name}"}
{/if}

{include file='footer.tpl' sideplayer=true station=$album_station}
