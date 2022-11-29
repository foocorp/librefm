{include file='header.tpl' subheader='track-header.tpl'}
<br />

{if $flattr_uid}
	{include file='flattr.tpl'}
{/if}

{include file='flattr-track-button.tpl'}

<h4>Appears on</h4>
{trackalbums artist=$track->artist_name track=$track->name}
{include file='albumlist.tpl' class=#table# items=$trackalbums fimage=true fstream=true ftime=true}

	{if $track->licenseurl && $track->license}
	<p id='license'><a rel=":license" href="{$track->licenseurl}"><img class="img-responsive" src="{$img_url}/licenses/{$track->license}.png" alt= "[ Track License ]"/></a></p>
	{/if}
	
	<ul class="list-inline">
		{if !empty($track->duration)}<li property="mo:durationXSD" datatype="xsd:duration" content="PT{$track->duration}S">Duration: {$duration}</li>{/if}
		<li property="rdfs:comment">{t}Playcount {/t} <span class="badge">{$track->getPlayCount()}</span></li>
		<li property="rdfs:comment">{t}Listeners {/t} <span class="badge">{$track->getListenerCount()}</span></li>
	</ul>

	{if $track->streamable}
	{if $track->downloadurl}
	<p>
	  <a class="btn btn-primary btn-xs" href='{$track->downloadurl}'>
	    <span class="glyphicon glyphicon-download-alt"></span>
	    {t}Download track{/t}
	  </a>
	</p>
	{elseif $track->streamurl}
	<p>
	  <a class="btn btn-primary btn-xs" href='{$track->streamurl}'>
	    <span class="glyphicon glyphicon-download-alt"></span>
	    {t}Download track{/t}
	  </a>
	</p>
	{/if}
	{/if}

	{if $logged_in}
	   {if $isloved}
               <form action='' method='post'>
		 <button class="btn btn-danger btn-xs"
			 type='submit' name='unlove' id='unlove' value='{t}Unlove this track{/t}'>
		   {t}Unlove this track{/t}
		 </button>
	       </form>
	   {else}
	       <form action='' method='post'>
		 <button class="btn btn-danger btn-xs" type='submit' name='love' id='love'
			 value='{t}Love this track{/t}'>
		   <span class="glyphicon glyphicon-heart"></span>
		   {t}Love this track{/t}
		 </button>
	       </form>
          {/if}
       {/if}



	{if !empty($tagcloud)}
		<h3 class="text-center">{t}Tags used to describe this track{/t}</h3>
		<ul class="tagcloud">
		{section name=i loop=$tagcloud}
			<li style='font-size:{$tagcloud[i].size}'><a href='{$tagcloud[i].pageurl}' title='{t uses=$tagcloud[i].count}This tag was used %1 times{/t}' rel='tag'>{$tagcloud[i].name}</a></li>
		{/section}
		</ul>
	{/if}
	<br />

{* Hack to get player if track is streamable *}
{if $track->streamable}
	{$streamable = true}
{/if}

{include file='footer.tpl' sideplayer=true station='track'}
