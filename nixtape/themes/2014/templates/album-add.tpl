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
			  <label for='name'>{t}Album Name{/t}</label>
			  <input class="form-control" type='text' name='name' 
				 id='name' {if $edit}disabled{/if} value='{$name|escape:'htmlall'}' />
			  <p class="help-block">{t}The name of the album{/t}</p>
			</div>

			<div class="form-group">
			  <label for='image'>{t}Cover Image{/t}</label>
			  <input class="form-control" type='text' name='image' 
				 id='image' value='{$image|escape:'htmlall'}' />
			  <p class="help-block">
			    {t}Address linking to the album's cover image{/t}
			  </p>
			</div>
			{if $edit}
				<button class="btn btn-primary" type='submit' name='submit' value='{t}Edit Album{/t}'>
				  {t}Edit Album{/t}
				</button>
			{else}
				<button class="btn btn-primary" type='submit' name='submit' value='{t}Create Album{/t}'>
				  {t}Create Album{/t}
				</button>
			{/if}
		</form>
	</div>
</div>

{include file='footer.tpl'}
