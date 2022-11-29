{include file='header.tpl'}
{if ($logged_in)}
	{if $creating}
		{if $already_exists}
			{if !empty($managers)}
				{t}We already have an artist by that name and they're already managed by:{/t}

				<ul>
				{section name=i loop=$managers}
					<li><a href='{$managers[i]->getURL()}'>{$managers[i]->name}</a></li>
				{/section}
				</ul>

				<p>{t escape=no}If you believe these users shouldn't be managing this artist please <a href='https://git.gnu.io/foocorp/librefm/issues/new'>raise a support ticket in our bug tracker</a> and we'll check in to it.{/t}</p>
	
				<p>{t escape=no}Otherwise please <a href='{$base_url}/artist-signup.php'>try again</a> with a new artist name.{/t}</p>
			{else}
				<p>{t escape=no artisturl=$artist->getURL()}We already have an artist by that name, but they're currently not being managed by anyone. Does <a href='%1' target='_blank'>this</a> look like you?{/t}</p>
				<form method='post' action=''>
				  <input type='hidden' value='{$artist->name}' name='artist_name' />
				  <button class="btn btn-primary" type='submit' value="{t}Yes, that's me!{/t}" name='confirm_artist' />
				  {t}Yes, that's me!{/t}
				  </button>
				  <button class="btn btn-primary" type='submit' value="{t}No, that's not me.{/t}" name='reject_artist' />
				  {t}No, that's not me.{/t}
				  </button>
				</form>
			{/if}
		{/if}
	{elseif $created}
		<p>{t escape=no managementurl=$artist->getManagementURL()}Awesome, you're all ready to start sharing your music! To get started head over to your <a href='%1'>artist management page</a> and start filling in a few details about yourself.{/t}</p>
	{elseif $too_popular}
		<p>{t escape=no}Wow, you're pretty popular! To make sure you're really associated with this band we're going to have to do some extra checks before enabling your artist account. If you're on Jamendo we'll typically send you a message there to check, otherwise we'll try to send an e-mail to the address on your band's website. Once that's all sorted we'll send you an e-mail letting you know that your account is ready for you!{/t}</p>
	{else}
		{if $reject_artist}
			<p class="text-center"><strong>{t}Sorry, in that case you'll have to pick a new name.{/t}</strong></p>
		{/if}
		<form method='post' action=''>
		  <div class="form-group">
		    <label for="artist_name">
		      {t}Artist name:{/t}
		    </label>
		    <input class="form-control" type='text' name='artist_name' id='artist_name' />
		    <p class="help-block">
		      {t}To start off just let us know the name that you like to perform under:{/t}
		    </p>
		  </div>
		  <button class="btn btn-primary" type="submit" value="{t}Create artist account{/t}">
		    {t}Create artist account{/t}
		  </button>
		</form>
	{/if}
{else}
	<p>{t site=$site_name escape=no}Before creating an artist account you first need to <a href='{$base_url}/register.php'>register</a> or <a href='{$base_url}/login.php'>log in</a> with a normal %1 account.{/t}</p>
{/if}

{include file='footer.tpl'}
