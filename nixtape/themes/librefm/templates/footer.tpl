</div>
<div id='content-box-bottom'></div>
</div>
<div id='ft-border'></div>
<div id='ft'>
	<div id='footer-content'>

		{if ($logged_in)}
			{include file='language-selector.tpl'}<br />
		{else}
			<p>Please <a href='/login.php'>log in</a> to view Libre.fm in other languages.</p>
		{/if}

		<a href="http://playogg.org/">{t}Libre.fm is a proud supporter of the Play Ogg campaign{/t}</a>
		<ul id='dev-links'>
			<li><a href="http://libre.fm/developers/">{t}Developer info{/t}</a></li>
			<li><a href="https://git.gnu.io/foocorp/librefm/issues/new">{t}Report a bug{/t}</a></li>
			<li><a href="https://git.gnu.io/foocorp/librefm/wikis/home">{t}Wiki{/t}</a></li>
			<li><a href="http://identi.ca/group/librefm/join">{t}Join our blog{/t}</a></li>
			<li><a href="http://turtle.libre.fm/display.php">{t}Recent tracks{/t}</a></li>
		</ul>
		<p>{t escape=no}Powered by <a href="http://gnu.org/software/fm">GNU FM{/t}</a></p>
		<p>{t escape=no}A <a href='http://foocorp.net'>FooCorp</a> thing. Since 1997 the good people of FooCorp have been making entertaining things for the web.{/t}</p>

		<p><a href='http://foocorp.net/cat.html'>FOO 200</a></p>

		<p>{t}Visit other autonomo.us sites like:{/t} <a href="http://identi.ca">Identi.ca</a>, <a href="http://wikidot.org">Wikidot</a>, <a href="http://filmaster.com">filmaster</a>.</p>

		<p>{t escape=no}Hosted by <a href='http://www.bytemark.co.uk'>Bytemark</a> and the <a href='http://www.isc.org'>Internet Systems Consortium</a>, with help from <a href='http://corehost.us/stopsopa.html'>corehost</a>.{/t}</p>

	</div>
</div>
</body>
</html>
