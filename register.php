<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Welcome!</title>
		<meta charset = "UTF-8">
		<link href = "author.css" rel = "stylesheet" type = "text/css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<!--<script type="text/javascript" src = "register.js"></script>-->
		<script type="text/javascript" src="reghandler.js"></script>
	</head>
	<body>
		<div id = "register" class = "reg__form_wrapper data_form sipsession_form">	
			<h1>Registration</h1>
				<div class = "user_data_field__wrapper">
					<label for="user_name">
						<input type="text" name="user_name" placeholder = "имя" data-value = "имя" id="user_name" class="user_data_fields">
					</label>
				</div>
				<div class = "user_data_field__wrapper" >
					<label for="user_surname">
						<input type="text" name="user_surname" placeholder = "фамилия" data-value = "фамилия" id="user_surname" class="user_data_fields">
					</label>
				</div>
					<div class = "user_data_field__wrapper">
						<label for="user_mail">
					<input type="text" name="user_mail" placeholder = "почта" data-value = "почта" id="user_mail" class="user_data_fields">
				</label>
				</div>
				<div class = "user_data_field__wrapper">
					<label for="user_login">
						<input type="text" name="user_login" placeholder = "логин" data-value = "логин" id="user_login" class="user_data_fields">
					</label>
				</div>
					<div class = "user_data_field__wrapper">
						<label for="user_password">
							<input type="password" name="user_password" placeholder = "пароль" data-value = "пароль" id="user_password" class="user_data_fields">
						</label>
				</div>
				<button type="submit" class="data__submit" name = "send_reg_info">Отправить</button>

		</div>
	</body>
</html>
	