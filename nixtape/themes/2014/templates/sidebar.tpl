<div class="col-sm-4">
	<aside>
	{if $player}
		{if $streamable}
			{include file='player.tpl'}
		{/if}
	{/if}

	{foreach from=$sideblocks item=block}
		<div class='sideblock-top'></div>
		{include file=$block}
		<div class='sideblock-bottom'></div>
	{foreachelse}
		<div class='sideblock-top'></div>
		{include file='sidebar-tips.tpl'}
		<div class='sideblock-bottom'></div>
	{/foreach}
	<div class='sideblock-top'></div>
	{include file='sidebar-ads.tpl'}
	<div class='sideblock-bottom'></div>
	</aside>
</div>
