{if ($logged_in)}
{include file='header.tpl'}

<h1>Welcome back, {$this_user->name}</h1>

<div id="welcome-box" class="well">

  <p>  {t escape=no userurl=$this_user->getURL() statsurl=$this_user->getURL('stats')}
    <a href="%1">Go to your profile</a> or <a href="%2">view your listening statistics</a>.
    {/t}
  </p>

</div>

{if isset($tagcloud)}
<div id="tag-cloud-box">

  {include file='popular.tpl'}

</div>
{/if}

{else}
{$nosidebar=true}
{include file='header.tpl'}

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Let's get you started</h1>
    <p class="lead">Share your listening habits from your phone, computer or tablet, and find similiar artists.<br />All the music on Libre.fm is freely licensed for you to stream, download and remix.</p>

    <p><a class="btn btn-success btn-lg" href="{$base_url}/register.php">1. Sign up for free &raquo;</a> &nbsp; <span class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="https://git.gnu.io/foocorp/librefm/wikis/Set-Up-Your-Music-Player" class="btn btn-primary btn-lg">2. Set up your music player &raquo;</a> &nbsp; <span class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="popular-page.php" class="btn btn-warning btn-lg">3. Track your listening &raquo;</a></p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h2>Community</h2>

      <p>The Libre.fm community is a mixture of music superfans
	and artists, where artists can share their music for
	everyone to enjoy.</p>

      <p>You can listen to a selection of the Libre.fm community's
	favourite tracks on our <a
				   href="/listen.php?station=librefm://community/loved">Community
	  Station</a>. It's made up out of a random selection of all
	the tracks that Libre.fm users have said they loved.</p>

      <p><a class="btn btn-default" href="/listen.php?station=librefm://community/loved">Listen now &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <h2>Artists</h2>

      <p>We believe we represent a good deal for artists: we only
	promote artists who choose to share their music with the
	world.</p>

      <p>In return, we allow artists to put up payment buttons and
	links to social sites and their newsletter. We automatically
	pull in notices from services such as Twitter and GNU social too.</p>

      <p><a class="btn btn-default" href="/artist-signup.php">Sign up for an artist account &raquo;</a></p>

    </div>
    <div class="col-lg-4">

    <h2>Sign up for free</h2>    
    
    <form action="/register.php" method="post">

          {include file='register-form.tpl'}

    </form>  

    </div>
  </div>



  <h2 class="text-center lead">
    {t site=$site_name}%1 allows you to share your listening habits and discover new music.{/t}
  </h2>
  <div class="text-center" id="buttons sign-up">
    <p><a class="btn btn-primary btn-lg" href="{$base_url}/register.php">{t}Sign up now{/t}</a></p>
  </div>
  {/if}
  <p class="text-center">Are you an artist? 
    <a href="{$base_url}/artist-signup.php">Sign up now</a> 
    to start sharing your music with our listeners!</p>

  {include file='footer.tpl'}
