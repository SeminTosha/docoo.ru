<!DOCTYPE html>
<html>
	<head>
		<title>SIPhone</title>
		<meta charset="UTF-8">
		<link href = "style.css" rel = "stylesheet" type = "text/css">
	</head>
	<body>
		<div id = "phone_settings">
			<form action = "handler.php" method = "post" ></br>
				<div id = "sip_v">
				<label for = "sip1"><input type = "radio" name = "protocol_v"  id = "sip1" value = "SIP/1.0">SIP/1.0</label>
				<label for = "sip2"><input type = "radio" name = "protocol_v" id = "sip2" checked = "checked" value = "SIP/2.0">SIP/2.0</br></label>
				</div>
				<div id = "tr_prot">
				<label for = "tcp"><input type = "radio" name = "tr_protocol" id = "tcp" checked = "checked" value = "TCP">TCP</label>
				<label for = "udp"><input type = "radio" name = "tr_protocol" id = "udp" value = "UDP">UDP</label>
				<label for = "tls"><input type = "radio" name = "tr_protocol" id = "tls" value = "TLS">TLS</br></label>
				</div>
				<label for = "domain">Домен:</br><input type = "text" name = "domain" id = "domain"></br></label>
				<label for = "client">Ваше имя:</br><input type = "text" name = "client_name"></br></label>
				<div id = "client_device">
				<label for = "pc">ПК<input type = "radio" name = "device" value = "pc" id = "pc" checked = "checked"></label>
				<label for = "pc">смартфон<input type = "radio" name = "device" value = "smartphone" id = "smartphone"></label>
				<label for = "pc">планшет<input type = "radio" name = "device" value = "pad" id = "pad"></br></label>
				</div>
				<input type = "submit" name = "send">
			</form>
		</div>
	</body>
</html>

<!-- Перде тем, как начинать, нужно изучить следующие вопросы: -->
<!-- HTML5 -->
<!-- CSS3 -->
<!-- ReactJS -->