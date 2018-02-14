	<?php
	$client_data = $_POST;
	$empty_fields = 0;
	if(empty($_POST)){
		echo "Данные не обнаружены!";
		return;
	}else{
		if(empty($_POST['domain'])){
			echo "Домен не указан</br>";
			$empty_fields ++;
		}	
		if(empty($_POST['client_name'])){
			echo "Вы не указали свое имя</br>";
			$empty_fields++;
		}
	}

	if($empty_fields > 0)return;

//после получения и проверки данных их нужно сохранить в БД phones_bd

//пока пропустим этот пункт и выведем их на странице в виде html
?>
<!DOUMENT html>
<html>
	<head>
		<title>SIPhone</title>
		<meta charset = "UTF-8">
		<link href = "style.css" rel = "stylesheet" type = "text/css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" src = "script.js"></script>
	</head>
	<body>
	<div id = "current_sets">
			<p>Домен: <?=$_POST['domain']?></p>
			<p>Имя:<?=$_POST['client_name']?></p>
			<p>Устройство:<?=$_POST['device']?></p>
			<p>Версия SIP:<?=$_POST['protocol_v']?></p>
			<p>Транспортный протокол:<?=$_POST['tr_protocol']?></p>
	</div>
	<div id = "phone_panel">
		<form action = "url" method = "post">
		<label for = "user_b_number">
			<span>Адрес абонента:</span></br>
			<input type = "text" name = "user_b_number" id = "user_b_number"></br>
		</label>
		<label for = "port">
			<span>Порт:</span></br>
			<input type = "text" name = "port"></br>
		</label>
		<label for = "subject">
			<span>Тема:</span></br>
			<input type = "text" name = "subject" id = "subject"></br>
		</label>
			<input type = "button" name = "call" value = "call" id = "call_button">
			</form>
		</div>
	</body>	
</html>

