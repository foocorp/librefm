{if ($logged_in)}
{include file='header.tpl'}

<h1>Welcome back, {$this_user->name}</h1>

<div id="welcome-box" class="well">

  <p>  {t escape=no userurl=$this_user->getURL() statsurl=$this_user->getURL('stats')}
    <a href="%1">Go to your profile</a> or <a href="%2">view your listening statistics</a>.
    {/t}
  </p>

</div>


{else}

<h1 class="text-center">Welcome!</h1>

<p class="text-center"><a href="/login.php">Login</a> or <a href="/register.php">Register</a>.</p>

{$nosidebar=true}
{include file='header.tpl'}

{/if}
  {include file='footer.tpl'}
