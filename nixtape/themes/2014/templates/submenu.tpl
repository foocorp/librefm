{if isset($submenu)}
	<ul class="nav nav-pills">
	{foreach $submenu as $i}
		<li {if $i.active}class='active'{/if}>
			<a href='{$i.url|escape:'html'}'>{$i.name}</a>
		</li>
	{/foreach}
	</ul>
	{else}&nbsp;
{/if}
