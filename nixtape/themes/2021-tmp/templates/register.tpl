{if isset($activated)}
{$nosidebar=true}
{include file='header.tpl'}
    <div class="jumbotron">
      <div class="container">
        <h1>{t}You're in!{/t}</h1>
	<p>{t escape=no}Your account has been activated! You may now login!{/t}</p>
        <p><a class="btn btn-primary btn-lg" href="{$base_url}/login.php">login!</a></p>
      </div>
    </div>
{include file='footer.tpl'}

{elseif isset($registered)}
{$nosidebar=true}
{include file='header.tpl'}
    <div class="jumbotron">
      <div class="container">
        <h1>{t}Go! Go! Go! Check your email now{/t}</h1>
	<p>{t}Please follow the link in your email to activate your account!{/t}</p>
      </div>
    </div>
{include file='footer.tpl'}
{else}
{include file='mini-header.tpl'}

 <div class="container">

      <h1 class="text-center">Sign up for a free account</h1>

      <form class="form-signin" method="post" action=''>

      	{if isset($errors)}
            <div class="alert alert-danger alert-dismissable">
	      <button type="button" class="close" data-dismiss="alert"
	      aria-hidden="true">&times;</button>
	      <p id='errors'>{$errors}</p>
	    </div>	
	{/if}

        {include file='register-form.tpl'}

      </form>

      	<p class="text-center"><small>{t}We won't sell, swap or give away your email address. You can optionally include personal data on your profile, which is displayed publicly.{/t}</small></p>

 </div>	

  </div> <!-- end of column -->
</div>	<!-- end of row -->
{include file='mini-footer.tpl'}
{/if}

