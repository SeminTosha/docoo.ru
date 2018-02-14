<?php
require_once "db_connect.php";

if(!empty($_POST)){
	$login = $_POST['user_login'];
	$password = $_POST['user_password'];
	$response_count = 0;
	
	$query = "SELECT * FROM userdata WHERE login=? AND password=?";
	$cat = $pdo->prepare($query);
	$cat->execute([$login, $password]);
	try{
		while($data = $cat->fetch(PDO::FETCH_ASSOC)){
			$response_count++;
		}
		if($response_count > 0){
			echo "200";
			return;
		}
		if($response_count === 0){
			echo "401";
			return;
		}
	}
	catch(PDOException $e){
		echo "500";
	}
	
	
}else{
	echo "405";
}

