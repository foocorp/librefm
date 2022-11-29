{include file='header.tpl' subheader='user-header.tpl'}

	<ul class="list-inline">
		<li>
		{if $type != 'loved'}<a href='{$me->getURL('station')}'>{/if}{t}Loved radio{/t}{if $type != 'loved'}</a>{/if}
		</li>
		<li>
		{if $type != 'recommended'}<a href='{$me->getURL('station', 'type=recommended')}'>{/if}{t}Recommended radio{/t}{if $type != 'recommended'}</a>{/if}
		</li>
		<li>
		{if $type != 'mix'}<a href='{$me->getURL('station', 'type=mix')}'>{/if}{t}Mix radio{/t}{if $type != 'mix'}</a>{/if}
		</li>
		<li>
		{if $type != 'neighbours'}<a href='{$me->getURL('station', 'type=neighbours')}'>{/if}{t}Neighbourhood radio{/t}{if $type != 'neighbours'}</a>{/if}
		</li>
	</ul>


	{include file='player.tpl'}

{include file='footer.tpl'}
