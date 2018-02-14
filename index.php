<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Welcome!</title>
		<meta charset = "UTF-8">
		<link href = "author.css" rel = "stylesheet" type = "text/css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" src="authhandler.js"></script>
		<!--<script type="text/javascript" src = "register.js"></script>-->
	</head>
	<body>
		<div id = "authentification" class = "auth_form data_form">
		<!-- в амо используется поле hidden с токеном, наверное в целях безопасности. надо узнать, что это-->
			<div id = "auth_form" class = "sipsession_form">
				<h1>Login</h1>
					<div class = "user_data_field__wrapper">
					<label for = "user_login">
						<input type = "text" name = "user_login" placeholder = "login" data-value = "login" id = "user_login" class="user_data_fields">
					</label>
					</div>
					<div class = "user_data_field__wrapper">
					<label for = "user_password">
						<input type = "password" name = "user_password" placeholder = "password" data-value = "password" id = "user_password" class="user_data_fields">
					</label>
					</div>
					<div class = "auth_form__field_wrapper_buttons">
						<button type = "submit" name = "auth_submit" class = "data__submit">Войти</button>
						<a href = "register.php" class = "data__submit auth_form__register">Регистрация</a>
					</div>
			</div>
		<div>
	</body>
</html>