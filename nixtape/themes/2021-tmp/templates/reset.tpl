{include file='mini-header.tpl'}
<div class="page-header">
    <h1 class="text-center">{t}Reset my password{/t}</h1>
</div>

<form action="{$base_url}/reset.php" method='post' role='form' class="form-signin">
  <fieldset>

    {if isset($errors)}
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p id='errors'>{$errors}</p>
    </div>
    {/if}

    {if isset($changed)}
    <div class="alert alert-info alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p>{t}Your new password has been emailed to you.{/t}</p>
    </div>
    {elseif isset($sent)}
    <div class="alert alert-info alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p>{t}An email with further information has been sent to the email address associated with your profile.{/t}</p>
    </div>

    {else}
    <div id='invite'>

      <p>{t}Enter your username or e-mail address and we'll email you a link to reset your password. All passwords are encrypted in our database.{/t}</p>
      
      
      <div class="form-group">
	<label for='username'>{t}Username{/t}</label>
	<input class="form-control" id='username' name='user'  placeholder="{t}Your username:{/t}" type='text' value='' />
      </div>

      <p>{t}or{/t}:</p>

      <div class="form-group">
	<label for='email'>{t}E-mail{/t}</label>
	<input class="form-control" id='email' name='email' type='text'  placeholder="{t}Your e-mail:{/t}" value='' autofocus />
      </div>

      <button class="btn btn-primary btn-lg" type='submit' name='recover' value='{t}Reset my password!{/t}'>
	{t}Reset my password!{/t}
      </button>

  </fieldset>
  
</form>
</div>
{/if}
</div>
</div> <!--end of row -->
{include file='mini-footer.tpl'}
