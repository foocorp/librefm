<div id="player">

	<audio id="audio" autobuffer>
		{if $track->streamurl}
			<object id="fallbackembed" type="application/ogg" data="{$track->streamurl}"><a type="application/ogg" rel="enclosure" href="{$track->streamurl}">Listen to this track</a></object>
		{/if}
	</audio>

	<div id="loading" class="well"></div>

	<div class="player-panel" id="interface">
		<div id="infobox">
			<div id="trackinfo"><span id="artistname"></span>
				<div class="pull-right" id="timeinfo">
					<span id="currenttime"></span>/<span id="duration"></span>
				</div>
				<br />
				<span id="trackname"></span><span class="label label-info pull-right" id="scrobbled" style="display:none;">Scrobbled</span>
			</div>
			<div id="tracktags">
				<ul>
				</ul>
			</div>
		</div>
		
		<div id="progress">
			<div id="progress-slider" title="Seek to time"></div>
		</div>
	
		{* Button groups have display bugs when hiding first/last buttons with display:none*}
		<div class="btn-toolbar" id="p_buttons" role="toolbar">
			<div class="btn-group btn-group-xs">
{*				<a class="btn btn-default" id="toggleplay"><span class="glyphicon glyphicon-play" alt="{t}Play{/t}" title="{t}Play{/t}"></span>{t}Play{/t}</a>*}
				<a class="btn btn-default" id="play"><span class="glyphicon glyphicon-play"  alt="{t}Play{/t}" title="{t}Play{/t}"></span></a>
				<a class="btn btn-default" id="pause"><span class="glyphicon glyphicon-pause" alt="{t}Pause{/t}" title="{t}Pause{/t}"></span></a>
				<a class="btn btn-default" id="skipback"><span class="glyphicon glyphicon-step-backward" alt="{t}Skip Backwards{/t}" title="{t}Skip Backwards{/t}"></span></a>
				<a class="btn btn-default" id="skipforward"><span class="glyphicon glyphicon-step-forward" alt="{t}Skip Forwards{/t}" title="{t}Skip Forwards{/t}"></span></a>
			</div>
			<div  class="btn-group btn-group-xs">
			{if $logged_in}
				<a class="btn btn-default" id="ban"><span class="glyphicon glyphicon-ban-circle" alt="{t}Ban{/t}" title="{t}Ban{/t}"></span></a>
{*				<a class="btn btn-default" id="toggletag"><span class="glyphicon glyphicon-tag" alt="{t}Tag{/t}" title="{t}Tag{/t}"></span></a>*}
				<a class="btn btn-default" id="open_tag"><span class="glyphicon glyphicon-tag" alt="{t}Tag{/t}" title="{t}Tag{/t}"></span></a>
				<a class="btn btn-default" id="close_tag"><span class="glyphicon glyphicon-tag" alt="{t}Tag{/t}" title="{t}Tag{/t}"></span></a>
				<a class="btn btn-default" id="love"><span class="glyphicon glyphicon-heart" alt="{t}Love{/t}" title="{t}Love{/t}"></span></a>
			{/if}
			</div>
			<div class="btn-group btn-group-xs pull-right">
				<a class="btn btn-default" id="volume"><span class="glyphicon glyphicon-volume-up" alt="{t}Volume{/t}" title="{t}Volume{/t}"></span></a>
{*				<a class="btn btn-default" id="toggleplaylist"><span class="glyphicon glyphicon-list" alt="{t}Playlist{/t}" title="{t}Playlist{/t}"></span></a>*}
				<a class="btn btn-default" id="hideplaylist"><span class="glyphicon glyphicon-list" alt="{t}Playlist{/t}" title="{t}Playlist{/t}"></span></a>
				<a class="btn btn-default" id="showplaylist"><span class="glyphicon glyphicon-list" alt="{t}Playlist{/t}" title="{t}Playlist{/t}"></span></a>

			</div>
		</div>
	
		<div id="volume-box">
			<div id="volume-slider"></div>
		</div>
		
		<div id="tagbox">
			<form id="tag_input">
			    <label>{t}Tag this track:{/t}</label>
			    <div class="input-group input-group-sm">
			      <input class="form-control" type='text' id='tags' name='tags' placeholder='guitar, violin, female vocals'/>
			      <span class="input-group-btn">
				<button class="btn btn-default" id='tag_button'>
				  {t}Tag{/t}
				</button>
			      </span>
			    </div>
			</form>
		</div>

		<div id="playlist">
			<ul class="list-unstyled" id="songs">
			</ul>
		</div>

	<p><a id="dlbutton" href="{$track->streamurl}" class="btn btn-success" download>Download track</a></p>

	</div>
	<br />




{*	<span id="toggleproblems">{t}Player problems?{/t}</span>*}
	<div class="alert alert-danger" id="problems">
		<p>{t escape=no}The player currently works in <a class="alert-link" href='http://www.chromium.org/Home'>Chromium</a> and <a class="alert-link" href='http://www.gnu.org/software/gnuzilla/'>Icecat</a>/<a class="alert-link" href='http://www.mozilla.org/en/firefox/'>Firefox</a> or later &mdash; it may also work in Chrome and Opera, though we don't recommend them.{/t}</p>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {ldelim}
		{if $station == 'track'}
			var playlist = [{ldelim}"artist" : "{$track->artist_name|escape:'javascript'}", "album" : "{$track->album_name|escape:'javascript'}", "track" : "{$track->name|escape:'javascript'}", "url" : "{$track->streamurl}"{rdelim}];
			var radio_session = false;
			var station = false;
		{else}
			var playlist = false;
			var radio_session = "{$radio_session}";
			var station = "{$station}";
		{/if}
		{if isset($this_user)}
		playerInit(playlist, "{$this_user->getWebServiceSession()}", false, station, "{$gnufm_key}");
		{else}
		playerInit(playlist, false, radio_session, false, "{$gnufm_key}");
		{/if}
	{rdelim});
</script>
