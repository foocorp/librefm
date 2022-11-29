	<h4>{t}Albums{/t}</h4>
	{artistalbums artist=$artist->name}
	{include file='albumlist.tpl' class=#table# items=$artistalbums fimage=true fstream=true ftime=true}
	{if $add_album_link}<a href='{$add_album_link}'><strong>{t}Add new album{/t}</strong></a>{/if}

	<h4>{t}Tracks{/t}</h4>
	{artisttracks artist=$artist->name}
	{include file='tracklist.tpl' class=#table# items=$artisttracks fimage=true fstream=true}
