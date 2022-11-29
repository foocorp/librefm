<div class='sideblock'>
	{math equation='rand(0,2)' assign=ad}
	{if $ad == 0}
		<h3>{t}Libre.fm Merchandise{/t}</h3>
		<img src='{$img_url}/t-shirt.png' alt='Artistic. Freedom. T-Shirt.' /><br /><br />
		<p>{t escape=no}Support Libre.fm and look even cooler than ever by visiting our <a href='http://librefm.spreadshirt.net'>European</a> or <a href='http://librefm.spreadshirt.com'>American store</a>.{/t}</p>
        {elseif $ad == 1}

        <h3>Try Firefox Aurora</h3>
        
        <p class='c'><a href='//affiliates.mozilla.org/link/banner/19127'><img
        src='//affiliates.mozilla.org/media/uploads/banners/a47240839834560ba213f2ed7df82697d6bc7766.png'
        alt='Download Aurora' /></a></p>

        <p class='c'><small>Firefox Aurora is the best way to try the latest and
        greatest additions to Firefox, before they're released to the
        general public.</small></p>
        
	{elseif $ad == 2}
		<h3>{t}Help Support Libre.fm{/t}</h3>
		<br />
		<script type='text/javascript'> 
			{literal}
			/* <![CDATA[ */
				(function() {
					var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
					s.type = 'text/javascript';
					s.async = true;
					s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
					t.parentNode.insertBefore(s, t);
				})();
			/* ]]> */
			{/literal}
		</script>
		<form action='https://www.paypal.com/cgi-bin/webscr' method='post' style='background: none; margin: 0; margin-right: 1em; width: auto; float: right;'> 
			<input type='hidden' name='cmd' value='_s-xclick'> 
			<input type='hidden' name='hosted_button_id' value='RDGHE34W54T7Y'> 
			<input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!' style='width: auto;'> 
			<img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1px'> 
		</form>
		<div style='margin-left: 3em; height: 80px;'>
			<a class='FlattrButton' style='display:none;' href='http://libre.fm'></a> 
			<noscript>
				<a href='http://flattr.com/thing/178604/Libre-fm-Share-your-listening-habits-and-discover-new-music' target='_blank'><img src='http://api.flattr.com/button/flattr-badge-large.png' alt='Flattr this' title='Flattr this' border='0' /></a>
			</noscript>
		</div>
		<a href='http://libre.fm/donate.html'><img src='{$img_url}/bitcoin.png' alt='Donate BitCoins' title='Donate BitCoins' /></a>
		<br /><br />
		<p>{t escape=no}Your donations don't just help to keep Libre.fm running, they also contribute to exciting new stuff like better equipment, artist outreach programs, conferences and hackfests.{/t}
		<p>{t escape=no}You can find out more about our targets for this year on our <a href='http://libre.fm/donate.html'>donations page</a>.{/t}</p>
	{/if}
</div>
