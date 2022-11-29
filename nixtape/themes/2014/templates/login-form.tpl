<div class="form-group">
  <label for='username'>{t}Username{/t}</label>
  <input class="form-control" id='username' name='username' type='text' value='{$username}' required autofocus>
</div>
<div class="form-group">
  <label for='password'>{t}Password{/t}</label>
  <input class="form-control" id='password' name='password' type='password' value='' required>
</div>
<div class="checkbox">
  <label for='remember'>
    <input type='checkbox' name='remember' id='remember' /> {t}Remember my login{/t}
  </label>
</div>
<input name="return" type="hidden" value="{$return|htmlentities}" />
<button class="btn btn-primary btn-lg" type='submit' name='login' value='{t}Login{/t}' />{t}Login{/t}</button>
<a href="/register.php" class="btn btn-success btn-lg">Register now</a>
