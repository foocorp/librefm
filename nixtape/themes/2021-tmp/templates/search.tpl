{include file='header.tpl'}
	
	     <ul class="list-unstyled">
		{section name=i loop=$results}
		{if $search_type == 'artist'}
			<li>
			  <p class="search-result-head">
			    <a href='{$results[i].url}'>{$results[i].name|escape:'html':'UTF-8'}</a>
			  </p>
			  <p class>{$results[i].bio_summary|escape:'html':'UTF-8'}</p>
			</li>
		{elseif $search_type == 'user'}
			<li>
			  <p class="search-result-head">
			  <a href='{$results[i].url}'>{$results[i].username|escape:'html':'UTF-8'}</a>
			  {if $results[i].fullname} &mdash; {$results[i].fullname|escape:'html':'UTF-8'}{/if}
			  </p>
			  <p>
			  {$results[i].bio|escape:'html':'UTF-8'}
			  </p>
			</li>
		{elseif $search_type == 'tag'}
			<li>
			  <p class="search-result-head">
			    <a href='{$results[i].url}'>{$results[i].tag|escape:'html':'UTF-8'}</a>
			  </p>
			</li>
		{/if}
		{/section}
	     </ul>

{include file='footer.tpl'}

