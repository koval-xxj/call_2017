<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="/css/admin/login.css">
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
      <form method="post" action="/admin/login">
        <div class="login-form">
          <div class="control-group">
            <input name="login" type="text" class="login-field" value="@isset($login) {{ $login }} @endisset" placeholder="username" id="login-name">
            <label class="login-field-icon fui-user" for="login-name"></label>
          </div>

          <div class="control-group">
            <input name="password" type="password" class="login-field" value="" placeholder="password" id="login-pass">
            <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
          {{ csrf_field() }}
          
          @isset($error)
            <div>
              <p class="error_message">{{ $error }}</p>
            </div>
          @endisset
          
          <input type="submit" class="btn btn-primary btn-large btn-block" value="Login" />
          <!--<a class="btn btn-primary btn-large btn-block" href="#">login</a>-->
          <a class="login-link" href="#">Lost your password?</a>
        </div>
      </form>
		</div>
	</div>
</body>
  
  
</body>
</html>
