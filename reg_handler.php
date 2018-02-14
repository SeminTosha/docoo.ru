<?php
require_once "db_connect.php";
//принимаем данные из формы регистрации и отправляем их в базу данных
//первичная проверка данных должна проходить на клиентской стороне
//затем на сревре происходит проверка 
if(!empty($_POST)){
	
	$name = $_POST['user_name'];
	$surname = $_POST['user_surname'];
	$mail = $_POST['user_mail'];
	$login = $_POST['user_login'];
	$password = $_POST['user_password'];
		
	$query = "INSERT INTO userdata VALUES(".
			"NULL,"."'".
			$name."','".
			$surname."','".
			$mail."','".
			$login."','".
			$password."'".
			");";
		
		echo $query;
		
		$count = $pdo->exec($query);
}else{
	echo "Ошибка. Не все данные введены.";
}