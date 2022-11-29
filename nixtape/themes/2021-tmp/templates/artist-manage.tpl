{include file='header.tpl'}

{if isset($errors)}
<div id="errors">
{section loop=$errors name=error}
        <p>{$errors[error]}</p>
{/section}
</div>
{/if}

<div about="{$id}" typeof="mo:MusicArtist">

	<div class="vcard">
		<form action='' method='post'>

		  <div class="form-group">
		    <label for='homepage'>Home Page</label>
		    <input class="form-control" type='text' name='homepage' id='homepage' value='{$homepage|escape:'htmlall'}' />
		    <p class="help-block">A link to the {$name|escape:'htmlall'}'s website.</p>
		  </div>

		<div class="form-group">
		  <label for='bio_summary'>Short Biography</label>
		  <textarea class="form-control" name='bio_summary' id='bio_summary'>{$bio_summary|escape:'html':'UTF-8'}</textarea>
		  <p class="help-block">Provide a short summary of {$name|escape:'htmlall'}'s biography.</p>
		</div>

		<div class="form-group">
		  <label for='bio_content'>Full Biography</label>
		  <textarea class="form-control" name='bio_content' id='bio_content'>{$bio_content|escape:'html':'UTF-8'}</textarea>
		  <p class="help-block">Provide a more detailed biography of {$name|escape:'htmlall'}.</p>
		</div>

		<div class="form-group">
		  <label for='image'>Image</label>
		  <input class="form-control" type='text' name='image' id='image' value='{$image|escape:'htmlall'}' />
		  <p class="help-block">Provide a link to an image of {$name|escape:'htmlall'}, this should be no larger than 256x256 pixels. If you need somewhere to upload your image we recommend <a href='http://imgur.com'>Imgur</a>, <a href='http://www.flickr.com'>Flickr</a> or <a href='http://www.archive.org'>Archive.org</a>.
		  </p>
		</div>

		<div class="form-group">
		  <label for='flattr_uid'>Flattr Username</label>
		  <input class="form-control" type='text' name='flattr_uid' id='flattr_uid' value='{$flattr_uid|escape:'htmlall'}' />
		  <p class="help-block">If you have a <a href='http://flattr.com'>flattr account</a> simply enter your flattr username and we'll automatically put flattr buttons on your artist and track pages. This way your fans will be able to show their appreciation with the occasional tip.</p>
		</div>

		<button class="btn btn-primary btn-block" type='submit' name='submit' value='Update' >Update</button>
		</form>
	</div>

	<ul>
		{section name=i loop=$albums}
			{if $albums[i]->name}
			<li about="{$albums[i]->id}" property="dc:title" content="{$albums[i]->name|escape:'html':'UTF-8'}" typeof="mo:Record" class="haudio">
			<a rel="foaf:page" href="{$albums[i]->getURL()}">{$albums[i]->name|escape:'html':'UTF-8'}</a>
			</li>
			{/if}
		{/section}
	</ul>

	<br />

</div>

{include file='footer.tpl'}

