{include file='header.tpl'}
{if ($logged_in)}
<div id="infobox">
<p>{t escape=no}Have you <a href="https://git.gnu.io/foocorp/librefm/wikis/Clients">configured your player</a> to report your music listening habits?{/t}</p>
</div>

<div id="welcome-box">
<br />
<p>{t escape=no userurl=$this_user->getURL() statsurl=$this_user->getURL('stats')}<a href="%1">Go to your profile</a> or <a href="%2">view your listening statistics</a>.{/t}</p>

</div>

{if isset($tagcloud)}
<div id="tag-cloud-box">

    {include file='popular.tpl'}

</div>
{/if}

{else}
<div style="background-color: orangered; border: 3px solid orange; text-align: center; font-size: 16px; font-weight: bold;"><a style="color: white !important;" href="#june2012">Please see an important announcement regarding Libre.fm passwords</a></div>
	<ul id="benefits">
		<li>{t escape=no}100&#37; indie artists.{/t}
			<ul>
				<li>{t}Libre.fm actively supports the creation of music by independent artists.{/t}</li>
			</ul>
		</li>
		<li>{t}You own your own listening data.{/t}
			<ul>
				<li>{t}Everything you put into Libre.fm is yours, not ours. Take it away and do cool things!{/t}</li>
			</ul>
		</li>
		<li>{t}Legally download and share any track.{/t}
			<ul>
				<li>{t escape=no}Every song on Libre.fm is made by musicians who <b>want</b> you to share their music.{/t}</li>
			</ul>
		</li>
		<li>{t}Your privacy, taken care of.{/t}
			<ul>
				<li>{t escape=no}Our <a href="http://libre.fm/more.html#privacy">privacy policy</a> is awesome. We don't even log your IP address! Privacy is important.{/t}</li>

			</ul>
		</li>
	</ul>
	<ul id="buttons">
		<li><a href="{$base_url}/register.php"><img src="{$img_url}/signup-button.png" alt="{t}Sign up now{/t}" /></a></li>
	</ul>

<div style="background-color: #ececec; border: 1px solid #666;">
     <h2 id="june2012">Important notice</h2>

        <p>As you may have seen, both Last.fm and LinkedIn have had a
        number of passwords compromised. As a precaution, ALL Libre.fm
        user passwords have been reset to a random, secure password.</p>

        <p>We know this is annoying, but a number of Libre.fm users
        will have used the same password on one or more of these
        sites, and so we request that you <a
        href="http://libre.fm/reset.php">reset your password</a> to
        continue using the site. And don't worry, your music player
        will cache your listens, so nothing is lost!</p>

        <p>As ever, you can send me your direct feedback and requests
        for support to Matt Lee, founder of Libre.fm &mdash; <a
        href="mailto:mattl@cnuk.org">mattl@cnuk.org</a>, or visit <a
        href="http://webchat.freenode.net/?channels=libre.fm&uio=d4">#libre.fm
        on irc.freenode.net</a>.</p>

        <p>Thank you, and thanks for your support of Libre.fm</p>

</div>

<hr />

	<h4>{t escape=no}That's not all! The code that powers Libre.fm is <a href="https://www.gnu.org/philosophy/free-sw.html">free software</a> &mdash; <a href="https://git.gnu.io/gnu/gnu-fm">take it</a>, run your own site and <a href="https://gnu.io/fm/developers/">join the development community!{/t}</a></h4>

{/if}
	<br /><br />
	<center>
	<div>Are you an artist? <a href="{$base_url}/artist-signup.php">Sign up now</a> to start sharing your music with listeners who are passionate about free culture!</div>
	</center>

{include file='footer.tpl'}
