{if $flattr_uid}
	<div class="flattr" style="float: right; padding-right: 2em;">
		<a class="FlattrButton" style="display:none;"
			title="{$name|escape:'htmlall'}"
			rev="flattr;uid:{$flattr_uid|escape:'htmlall'};category:audio;tags:music,creative commons,free,libre.fm;"
			{if $bio_summary}
				href="{$url}">{$bio_summary|escape:'htmlall'}</a>
			{else}
				href="{$url}">{$name|escape:'htmlall'} makes their music freely available on Libre.fm for you to listen to, share and remix however you like.</a>
			{/if}
	</div>
{/if}
