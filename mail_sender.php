<?php
//отправляет письмо на почту клиента при регистрации
$user_data = $_POST;
if(isset($user_data) && !empty($user_data)){
	echo('OK');
	echo "<br>";
	echo "</pre>";
	print_r($user_data);
	echo "</pre>";
	
	$name = $user_data['user_name'];
	$surname = $user_data['user_surname'];
	$mail = $user_data['user_mail'];
	$login = $user_data['user_login'];
	$password = $user_data['user_password'];	
}else{
	return;
}

$text = "Congratulations, ".$name." ".$surname."!\r\n"."You're was succefully registered in example.com!\r\n"."Your login: ".$login."\r\n"."Your password: ".$password;
$to = $mail;
$subject = "Welcome!";
mail($to, $subject, $text, join("\r\n", array(
	"From:semin_work@mail.ru",
	"Reply_To:semin_work@mail.ru",
	"X-Mailer: PHP/". phpversion()
)));



