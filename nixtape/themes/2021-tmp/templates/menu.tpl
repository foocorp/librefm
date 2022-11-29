<ul class="nav navbar-nav">
{if ($logged_in)}
        <li>

	    </a>
	</li>
<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Signed in as <span class="glyphicon glyphicon-user">
	    </span>
{t name=$this_user->name}%1{/t} <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{$this_user->getURL()}">	    <span class="glyphicon glyphicon-user"></span> {$this_user->name} <span class="badge">SUPPORTER</span></a></li>
          <li><a href="{$this_user->getURL()}/stats">	    <span class="glyphicon glyphicon-stats"></span> {$this_user->name}/stats</a></li>
          <li><a href="{$this_user->getURL()}/recent-tracks">	    <span class="glyphicon glyphicon-headphones"></span> {$this_user->name}/recent</a></li>
	  <li><a href="{$base_url}/user-export.php"><span class="glyphicon glyphicon-user"></span>  Data export</a></li>
	  <li><a href="{$base_url}/user-delete.php"><span class="glyphicon glyphicon-user"></span>  Deleting my account</a></li>
          <li><a href="{$base_url}/login.php?action=logout">
	    <span class="glyphicon glyphicon-log-out">
	    </span>
	    {t}Logout{/t}
</a></li>
	
        </ul>
      </li>
	<li>
	  <a href="{$base_url}/listen.php">
	    <span class="glyphicon glyphicon-headphones"></span>
	    {t}Listen{/t}
	  </a>
	</li>
<!--    <li>
	  <a href="{$base_url}/popular.php">
	    <span class="glyphicon glyphicon-flash">
	    </span>
	    {t}Popular{/t}
	  </a>
	</li> -->
{else}
	<li>
	  <a href="{$base_url}/login.php">
	    <span class="glyphicon glyphicon-log-in">
	    </span>
	    {t}Log in{/t}
	</a>
	</li>
	<li>
	  <a href="{$base_url}/listen.php">
	    <span class="glyphicon glyphicon-headphones">
	    </span>
	    {t}Listen{/t}
	  </a>
	</li>
<!--	<li>
	  <a href="{$base_url}/popular-page.php">
	    <span class="glyphicon glyphicon-flash">
	    </span>
	    {t}Popular{/t}
	  </a>
	</li> -->
	<li>
	  <a href="{$base_url}/register.php">
	    <span class="glyphicon glyphicon-ok">
	    </span>
	    {t}Sign up{/t}
	  </a>
	</li>
{/if}
	<li><a href="{$base_url}/donate.php">Donate</a></li>
</ul>
{if ($logged_in)}
<p class="navbar-text pull-right"></p>
{/if}
