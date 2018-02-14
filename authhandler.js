//скрипт отправляет данные на php скрипт и принимает от него подтверждение аккаунта или отказ в доступе
//@fixme при  появлении предупреждений размер формы меняется. нужно найти способ, 
//чтобы при любых сообщениях он оставался таким же 
$(document).on('click', '.data__submit', function(){
	user_login = $("#user_login").val();
	user_password = $("#user_password").val();
	data = {
		user_login: user_login,
		user_password: user_password
	};
	
	if(data.user_login !== "" && data.user_password !==""){
	
		$.ajax({
		url:"auth_handler.php", 
		type: "POST",
		data: data, 
		success: function(data){
		//построим примтивный анализ ответа
			switch(data){
				case '200':
					alert("200 OK");
					break;
				case '401': 
					{
						var data_fields = $('.user_data_fields'),
							auth_form = $('#auth_form');
						
						data_fields.css("color", "red");
					
						$(document).on('input', '.user_data_fields', function(){
							data_fields.css("color", "black");
							$('.additional_block').remove();
							auth_form.css('margin-top', '40px');
						})
					
						var html = "<div class = 'additional_block' style='color:red; font-style:italic;'><span>Неверный логин или пароль!</span></div>";
						if($('.additional_block').length == 0){
							$('#auth_form').css('margin-top', '18px').prepend(html);
						}
					};
					break;
				case '500':
					{
						var html = "<div class = 'additional_block' style='color:red; font-style:italic;'><span>Похоже, на сервер возникли неполадкию Приносим свои извинения за временные неудобства.</span></div>";
						if($('.additional_block').length == 0){
							$('#auth_form').css('margin-top', '10px').prepend(html);
						}
					};
					break;
				case '405':
			}
		}
		});
	}else{
		var html = "<div class = 'additional_block' style='color:red; font-style:italic;'><span>Одно или неколько полей не заполнены</span></div>";
				if($('.additional_block').length == 0){
					$('#auth_form').css('margin-top', '0px').prepend(html);
				}
	}
});
