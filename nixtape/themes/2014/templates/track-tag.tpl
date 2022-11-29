{include file='header.tpl' subheader='track-header.tpl'}

<div about="{$track->id|escape:'html':'UTF-8'}" typeof="mo:Track" class="haudio">
	{if !empty($tagcloud)}
		<h3 class="text-center">{t}Popular tags other people used to describe this track{/t}</h3>
		<ul class="tagcloud">
			{section name=i loop=$tagcloud}
				<li style='font-size:{$tagcloud[i].size}'><a href='{$tagcloud[i].pageurl}' title='{t uses=$tagcloud[i].count}This tag was used %1 times{/t}' rel='tag'>{$tagcloud[i].name}</a></li>
			{/section}
		</ul>
	{/if}
	{if !empty($mytags)}
		<h3 style="text-center">{t}Tags you've used for this track{/t}</h3>
		<ul class="tagcloud">
			{section name=i loop=$mytags}
				<li>{$mytags[i].tag}</li>
			{/section}
		</ul>
	{/if}
	<br />
	<div class="row">
	<div class="col-sm-8">
		<form action='' method='post'>
		  <div class="form-group">
			<label class="add-on" for='tags'>
			  {t}Add tags:{/t}
			</label>
			<div class="input-group">
			  <input class="form-control" type='text' name='tags' id='tags'
				 placeholder="guitar, violin, female vocals, piano" />
			  <span class="input-group-btn">
			    <button class="btn btn-default" type='submit' name='tag' id='tag' value='tag'>{t}Tag{/t}</button>
			  </span>
			</div>
		  </div>
		</form>
	</div>

	<br />
</div>

{include file='footer.tpl'}
