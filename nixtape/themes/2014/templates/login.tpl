{include file='mini-header.tpl'}

    {if isset($errors)}
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert"
	      aria-hidden="true">&times;</button>
      <p id='errors'>{$errors}</p>
    </div>	
    {/if}

    <form method="post" class="form-signin" role='form'>
      {include file='login-form.tpl'}
    </form>

{include file='mini-footer.tpl'}
