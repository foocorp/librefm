	<ul class="pager">
		<li class="previous {if $page->page_number <= 1}disabled{/if}">
		  <a  href="{$page->urls.page_prev}">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		</li>
		<li class="next">
		  <a href="{$page->urls.page_next}">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</li>
	</ul>
	<p class="text-center">page <span class="badge">{$page->page_number}</span></p>

