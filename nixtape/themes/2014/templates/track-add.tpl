{include file='header.tpl'}

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

<div about="{$id}" typeof="mo:Record" class="haudio">

	<div class="vcard">
		<form action='' method='post'>
        	  <div class="form-group">
		    <label for='name'>Track Name</label>
		    <input class="form-control" type='text' name='name' id='name' {if $edit}disabled{/if} value='{$name|escape:'htmlall'}' />
		    <p class="help-block">The name of the track</p>
	          </div>

		  <div class="form-group">
		    <label for='url'>Streaming URL</label>
		    <input class="form-control" type='text' name='streaming_url' id='streaming_url' value='{$streaming_url|escape:'htmlall'}' />
		    <p class="help-block">A link to an Ogg Vorbis file hosted on <a href='http://archive.org'>archive.org</a></p>
		  </div>

		  <button class="btn btn-primary" type='submit' name='submit' 
			  value='{if $edit}Edit{else}Create{/if} Track'>
		    {if $edit}Edit{else}Create{/if} Track
		  </button>
		</form>
	</div>
</div>

{include file='footer.tpl'}
