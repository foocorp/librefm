{include file='header.tpl' subheader='user-header.tpl' showbio=true}

<h1>Edit your profile</h1>

<p><a class="btn btn-primary btn-lg" href='{$base_url}/user-connections.php'>Connections to other services</a></p>

<p><a class="btn btn-success btn-lg" href='{$base_url}/artist-signup.php'>Get an artist account</a></p>

<!-- <p><a class="btn btn-default btn-lg" href='{$base_url}/artist-signup.php'>Change my password</a></p>

<p><a class="btn btn-warning btn-lg" href='{$base_url}/artist-signup.php'>Change my email address</a></p>

<p><button class="btn btn-danger btn-lg" href='{$base_url}/artist-signup.php'>Delete my account</button></p> -->

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

<form class="form-signin" action='{$base_url}/user-edit.php' method='post'>

  <div class="form-group">
    <label for='fullname'>{t}Full name:{/t}</label>
    <input class="form-control" name='fullname' id='fullname' value='{$fullname|escape:'html':'UTF-8'}' />
    <p class="help-block">{t}Enter your name here, if you want to.{/t}</p>
  </div>

  <div class="form-group">
    <label for='location'>{t}Location:{/t}</label>
    <input class="form-control" name='location' id='location' value='{$location|escape:'html':'UTF-8'}' />
    <p class="help-block">{t}Where do you live?{/t}</p>
  </div>

  <div class="form-group">
    <label for='homepage'>{t}Website address:{/t}</label>
    <input class="form-control" name='homepage' id='homepage' value='{$homepage|escape:'html':'UTF-8'}' />
  </div>

  <div class="form-group">
    <label for='avatar_uri'>{t}Avatar address:{/t}
      <span><a href='#dfn_avatar_uri' rel='glossary'>{t}What's this?{/t}</a></span>
    </label>
    <input class="form-control" name='avatar_uri' id='avatar_uri' value='{$avatar_uri|escape:'html':'UTF-8'}' />
  </div>

  <div class="form-group">
    <label for='bio'>{t}Mini Biography:{/t}</label>
    <textarea class="form-control" name='bio' id='bio'>{$bio|escape:'html':'UTF-8'}</textarea>
  </div>

  <div class="checkbox">
    <label for='receive_emails'>
      <input type='checkbox' name='receive_emails' id='receive_emails' style='width: auto;' {if $receive_emails}checked{/if} />
      {t}Receive E-mails:{/t}
      <span><a href='#dfn_receive_emails' rel='glossary'>{t}What's this?{/t}</a></span>
    </label>
  </div>

    <div class="form-group">
      <label for='id'>{t}WebID (FOAF){/t}:
	<span><a href='#dfn_id' rel='glossary'>{t}What's this?{/t}</a></span>
      </label>
      <input class="form-control" name='id' id='id' value='{$id|escape:'html':'UTF-8'}' />
    </div>

    <div class="form-group">
      <label for='laconica_profile'>{t}GNU social Profile:{/t}
	<span><a href='#dfn_laconica_profile' rel='glossary'>{t}What's this?{/t}</a></span>
      </label>
      <input class="form-control" onchange='laconicaChange();' onclick='laconicaClick();' name='laconica_profile' id='laconica_profile' value='{$laconica_profile|escape:'html':'UTF-8'}' />
    </div>

    <div class="form-group">
      <label for='journal_rss'>{t}RSS Feed:{/t}
	<span><a href='#dfn_journal_rss' rel='glossary'>{t}What's this?{/t}</a></span>
      </label>
      <input class="form-control" name='journal_rss' id='journal_rss' value='{$journal_rss|escape:'html':'UTF-8'}' />
    </div>


    <div class="checkbox">
      <label for='delete_account'>
	<input type='checkbox' id='delete_account' name='delete_account' style='width: auto;' />
	{t}Delete my account{/t}
      </label>
    </div>

  <div class="form-group">
    <label for='password_1'>{t}Password:{/t}
      <span>{t}Leave this blank if you don't want to change your password.{/t}</span>
    </label>
    <input class="form-control" name='password_1' id='password_1' type='password' autocomplete="off" value='' />
  </div>

  <div class="form-group">
    <label for='password_2'>{t}Confirm Password:{/t}
    </label>
    <input class="form-control" name='password_2' id='password_2' type='password' autocomplete="off" value='' />
  </div>

  <div class="form-group">
    <button class="btn btn-primary btn-block" type='submit' value='{t}Change{/t}'>{t}Change{/t}</button>
    <input name='submit' value='1' type='hidden' />
  </div>

</form>

<h3>{t}Help{/t}</h3>
<dl>
  <dt id='dfn_location_uri'>{t}Location check{/t}</dt>
  <dd>{t escape=no}This feature looks up your location on <a href='http://www.geonames.org'>geonames</a>. You don't need to do it, but it will allow us find your latitude and longitude so we can add some great location-based features in the future.{/t}</dd>

  <dt id='dfn_avatar_uri'>{t}Avatar address{/t}</dt>
  <dd>{t site=$site_name escape=no}The web address for a picture to represent you on %1. It should not be more than 80x80 pixels. (64x64 is best.) If you leave this empty, we'll use <a href='http://gravatar.com'>Gravatar</a> to find an image for you.{/t}</dd>

  <dt id='dfn_id'>WebID (FOAF)</dt>
  <dd>{t escape=no}An address that represents you in RDF. See <a href='http://esw.w3.org/topic/WebID'>WebID</a> for details. If you don't know what this is, it's best to leave it blank.{/t}</dd>

  <dt id='dfn_laconica_profile'>GNU social Profile</dt>
  <dd>{t escape=no}The address for your micro-blog on a <a href='http://www.gnu.org/software/social/'>GNU social</a>-powered site such as <a href='http://freesocial.org/'>freesocial.org</a>.{/t}</dd>

  <dt id='dfn_journal_rss'>RSS Feed</dt>
  <dd>{t site=$site_name escape=no}An RSS feed which will be used to populate your journal on %1. Defaults to your StatusNet RSS feed if you provide your StatusNet micro-blog address.{/t}</dd>

  <dt id='dfn_receive_emails'>Receive E-mails</dt>
  <dd>{t escape=no}From time to time we send out e-mails about all the cool new stuff we're getting up to. If you'd rather not hear about these things then simply untick this box.{/t}</dd>
</dl>



{include file='footer.tpl'}
