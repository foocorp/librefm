<form class="navbar-form navbar-right" action='/search.php' method='get' role='search'>
  <div class="form-group">
	    <input class="form-control" name='search_term' type='text' value='{$search_term|escape:'html':'UTF-8'}'/>
	</div>
	<div class="form-group">
	    <select class="form-control" name='search_type'>
	      <option value='artist' {if $search_type == 'artist'}selected{/if}>{t}Artist{/t}</option>
	      <option value='user' {if $search_type == 'user'}selected{/if}>{t}User{/t}</option>
	      <option value='tag' {if $search_type == 'tag'}selected{/if}>{t}Tag{/t}</option>
	    </select>
	</div>
	<div class="form-group">
	  <button class="btn btn-default" type='submit' id='search_button'>
	    <span class="glyphicon glyphicon-search"></span>
	    {t}Search{/t}
	  </button>
	</div>
</form>
