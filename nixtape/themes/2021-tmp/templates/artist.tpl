{include file='header.tpl' subheader='artist-header.tpl'}

{if $flattr_uid}
{include file='flattr.tpl'}
{/if}

<div about="{$id}" typeof="mo:MusicArtist">

	<div class="vcard">

{* We load player in sidebar instead, see footer include at bottom of file
		{if $streamable}
		<div id='player-container'>
		{include file='player.tpl'}
		</div>
		{/if}
*}

		{if $bio_summary}
		<div class="note" id="bio" property="bio:olb" datatype="" style='clear: left;'>
		<h4>{t}Biography{/t}</h4>
		<p>{$bio_summary}</p>
			{if $bio_content}
				<p id='bio_content'>{$bio_content}</p>
			{/if}
		</div>
		{/if}
	</div>

	{include file='flattr-artist-button.tpl'}


	<h3>{t}Albums{/t}</h3>
	<ul>
		{section name=i loop=$albums}
		{if $albums[i]->name}
		<li about="{$albums[i]->id}" property="dc:title" content="{$albums[i]->name|escape:'html':'UTF-8'}" typeof="mo:Record" class="haudio">
					<a rel="foaf:page" href="{$albums[i]->getURL()}">{$albums[i]->name|escape:'html':'UTF-8'}</a>
		</li>{/if}
		{/section}	
		{if $add_album_link}<li><a href='{$add_album_link}'><strong>[{t}Add new album{/t}]</strong></a></li>{/if}
	</ul>


	<br />

	{if !empty($similarArtists)}
		<h3 style='text-align: center; clear: left;'>{t}Similar free artists{/t}</h3>
		<ul class="tagcloud">
		{section name=i loop=$similarArtists}
			<li style='font-size:{$similarArtists[i].size}'><a href='{$similarArtists[i].url}'>{$similarArtists[i].artist}</a></li>
		{/section}
		</ul>
	{/if}

	<br />

	{if !empty($tagcloud)}
		<h3 style='text-align: center; clear: left;'>{t}Tags used to describe this artist{/t}</h3>
		<ul class="tagcloud">
		{section name=i loop=$tagcloud}
			<li style='font-size:{$tagcloud[i].size}'><a href='{$tagcloud[i].pageurl}' title='{t uses=$tagcloud[i].count}This tag was used %1 times{/t}' rel='tag'>{$tagcloud[i].name}</a></li>
		{/section}
		</ul>
	{/if}

	<br />

</div>

{include file='footer.tpl' sideplayer=true}

