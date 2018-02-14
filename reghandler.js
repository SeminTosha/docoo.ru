$(document).ready(function(){
	
});

$(document).on('click', '.data__submit', function(){
					user_name = $('#user_name').val();
					user_surname = $('#user_surname').val();
					user_mail = $('#user_mail').val();
					user_login = $('#user_login').val();
					user_password = $('#user_password').val();
					data = {
						user_name: user_name,
						user_surname: user_surname,
						user_mail: user_mail,
						user_login: user_login,
						user_password: user_password
						};
					$.post("reg_handler.php", data, function(data){
					alert(data);
					});
			});