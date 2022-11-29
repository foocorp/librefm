<div class='sideblock'>
	{math equation='rand(0,0)' assign=ad}
	{if $ad == 0}
		<h3>{t}Help Support Libre.fm{/t}</h3>
		<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
		<p class="text-center">
			<input type='hidden' name='cmd' value='_s-xclick'> 
			<input type='hidden' name='hosted_button_id' value='RDGHE34W54T7Y'> 
			<input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!' style='width: auto;'> 
			<img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1px'> 
		</p>
		</form>
		<p class="text-center"><a href='http://flattr.com/thing/178604/Libre-fm-Share-your-listening-habits-and-discover-new-music' target='_blank'><img src='{$base_url}/themes/2014/img/flattr-badge-large.png' alt='Flattr this' title='Flattr this' border='0' /></a></p>

		<p class="text-center"><a href='http://libre.fm/donate.html'><img src='{$img_url}/bitcoin.png' alt='Donate BitCoins' title='Donate BitCoins' /></a></p>
		<p>{t escape=no}Help us make the GNU FM software which powers this site even better.{/t}
		<p>{t escape=no}You can find out more about our targets for this year on our <a href='http://libre.fm/donate.html'>donations page</a>.{/t}</p>
	{/if}
</div>
