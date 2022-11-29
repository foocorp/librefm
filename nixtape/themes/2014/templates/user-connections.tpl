{include file='header.tpl' subheader='user-header.tpl'}

<h3><a href='{$base_url}/user-edit.php'>{t}Edit your profile{/t}</a> | {t}Connections to other services{/t}</h3>

{if isset($errors)}
<div id="errors">
{section loop=$errors name=error}
	<div class="alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <p>{$errors[error]}</p>
	</div>
{/section}
</div>
{/if}

<div id='connections'>
	{if $connection_added}
	<div class="alert alert-success">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <strong>{t}Your new connection has been successfully added!{/t}</strong>
	</div>
	{/if}
	<h4>{t}Current connections{/t}</h4>
	{if empty($connections)}
		<p><em>{t}You don't currently have any connections configured.{/t}</em></p>
	{else}
		<table class="table">
		<tr><th>{t}Service{/t}</th><th>{t}Username{/t}</th><th>{t}Forward Scrobbles?{/t}</th></tr>
		{foreach from=$connections item=conn}
			<tr>
				<td>{if $conn.webservice_url == 'http://ws.audioscrobbler.com/2.0/'}<a href='http://www.last.fm'>Last.fm</a>{else}<a href='{$conn.webservice_url}'>{$conn.webservice_url}</a>{/if}</td>
				<td>{$conn.remote_username}</td>
				<td><a href='{$base_url}/user-connections.php?forward={if $conn.forward == 1}0{else}1{/if}&service={$conn.webservice_url}'>{if $conn.forward == 1}{t}Yes{/t}{else}{t}No{/t}{/if}</a></td>
			</tr>
		{/foreach}
		</table>
	{/if}
	<p>{t}Connections to other services allow us to do nifty things like forwarding your scrobbles to other places around the web.{/t}<br />
	{t}If that sounds cool then simply make a connection below.{/t}</p>

	<h4>{t}Add a connection{/t}</h4>
	{if isset($lastfm_key)}
		<a class="btn btn-primary" href='http://www.last.fm/api/auth/?api_key={$lastfm_key}'>{t}Connect to a Last.fm account{/t}</a><br /><br />
	{/if}
	{if isset($gnufm_key)}
			<form method="post" class="well">
			  <div class="form-group">
				<label for="remote_gnufm_url">
				  Connect to a remote GNU FM account
				</label>
				<input class="form-control" id="remote_gnufm_url" name="remote_gnufm_url" type="text" placeholder="http://mygnufmserver.tld" />
			  </div>
			  <button class="btn btn-primary" type="submit">Connect</button>
			</form>
	{/if}
</div>

{include file='footer.tpl'}
