{include file='header.tpl'}
{if isset($radio_session) || isset($station)}
{include file='flattr.tpl'}
{include file='player.tpl'}
<div id='error'></div>
<br /><br />
<div id='flattrstream' style='width: 50%; display: none;'>
  <div id='flattr'></div>
  <p>{t escape=no}Hey! If you really like this artist you can show your appreciation by donating to them via <a href='http://flattr.com'>flattr</a>.{/t}</p>
</div>

{else}
<h1>{t escape=no}Listen to music right here in your web browser!{/t}</h1>

<p>{t}To get started, simply enter the type of music you'd like to hear or select one of the common tags below:{/t}</p>


<form class="well" method='get' action='' role='form'>
  <div class="form-group">
    <label for="tag">{t}Custom tag:{/t}</label>
    <input class="form-control" type="text" id="tag" name="tag" />

    <ul class="nav nav-pills">
      <li><a href="?tag=folk">Folk</a></li>
      <li><a href="?tag=rock">Rock</a></li>
      <li><a href="?tag=metal">Metal</a></li>
      <li><a href="?tag=classical">Classical</a></li>
      <li><a href="?tag=pop">Pop</a></li>
      <li><a href="?tag=blues">Blues</a></li>
      <li><a href="?tag=jazz">Jazz</a></li>
      <li><a href="?tag=punk">Punk</a></li>
      <li><a href="?tag=ambient">Ambient</a></li>
      <li><a href="?tag=electronic">Electronic</a></li>
    </ul>

  </div>
  <div class="checkbox">
    <label for="only_loved">
      <input type="checkbox" id="only_loved" name="only_loved"  />
      {t}Only play me songs that other people love{/t}
    </label>
  </div>
  <button class="btn btn-primary btn-lg" type="submit" value="{t}Listen{/t}">{t}Listen{/t}</button>
<a class="btn btn-success btn-lg" href="?station=librefm://community/loved">{t site=$site_name escape=no}%1 Community Station</a>{/t}</p>


</form>

{/if}

{include file='footer.tpl'}
