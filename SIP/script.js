//Телефон может только совершать звонок. 
//ему можно навешать определнные свойства, которые будут будут уникальны для него

//нужно подключить jQuery
//повесить обработчик на кнопку call
//после нажатия на кнопку поочередно появляться окна с сообщениями SIP
//
function SoftPhone(){
	//звоним по адресу, указанному в аргументе
	//собственный номер
	var protocol_version = "SIP/2.0",
		transport_protocol = "UDP",
		domain_name = "example.com",
		client_name = "anton";
	
	//функция организует сессию, создавая объект класса SIPSession
	//пользователь указывает адрес назначения и порт. если порт не указан, то используется 5060
	this.call = function(destAddr, port, subj){
		var destination_address = destAddr,
			dest_user_name = destAddr.split('@')[0],
			dest_domain_name = destAddr.split('@')[1],
			s_port = null,
			subject = null;
			
		if(!arguments.port){
			s_port = 5060;
		}else{
			s_port = port;
		}
		if(arguments.subj){
			subject = subj;
		}
			
		//звонок создает объект SIPSession, котрый по сути является уникальынм соединением 
		var new_session = new SIPSession();
		//передаем сессии данные о нашем телефоне
		new_session.start(this.getSettings(), dest_user_name, dest_domain_name, s_port, subject);
		
	};
	
	this.completeSpeech = function(){
		//разрываем соединение
	};
	
	//пока настройки устанавливаются из кода 
	this.setSettings = function(prot_v, tr_protocol, domain, cl_name, cl_device){
		
		protocol_version = prot_v;
		trasport_protocol = tr_protocol;
		domain_name = domain;
		client_name = cl_name;
		client_device = cl_device;
	};
	
	this.getSettings = function(){
		return {
			protocol_version : protocol_version,
			transport_protocol : transport_protocol,
			domain_name : domain_name,
			client_name : client_name,
			client_device : client_device,
			
			toString : function(){
				return protocol_version + ":" + transport_protocol + ":" + client_name + ":" + domain_name;
			} 
		}
	}
}

//формирует запросы к серверу в формате SIP
//@todo: такое построение кажется неестественным, но пока оно видится самым простым. 
//в дальнейшем нужно приблизить архитектуру к реальной SIP-сети
//у сессии есть свои свойства
function SIPSession(){
	var protocol_version = null,
		transport_protocol = null,
		domain_name = null,
		user_a = null
		user_b = null,
		dest_domain_name = null,
		client_device = null,
		subject = null,
		port = null;
		
	this.start = function(phone_data, dest_user_name, dest_domain_name, s_port, subj){
		
		var protocol_version = phone_data.protocol_version,
			transport_protocol = phone_data.transport_protocol,
			domain_name = phone_data.domain_name,
			user_a = phone_data.client_name,
			user_b = dest_user_name,
			dest_domain_name = dest_domain_name,
			port = s_port,
			subject = subj;
		//начинаем обмен сообщениями SIP
		Invite();	
	}
	
	//методы форимруют соответствующие вопросы 
	function Invite(){
		//max_forwards пока статично, branch - только префикс, tag - нет
		//count должен увеличиваться при каждой транзакции
		var count = 0;
		var request = {
			'Request-Line' : "INVITE sip:" + user_b + "@" + dest_domain_name + " " + protocol_version,
			'via' : protocol_version + "/" + transport_protocol + " " + user_a + "-" + client_device + ":" + port + ";" + "branch=z9hG4bK...",
			'max_forwards' : 70,
			'to' : user_b + "<sip" + user_b + "@" + dest_domain_name + ">",
			'from' : user_a + "<sip" + user_a + "@" + domain_name + ">" + ";" + "tag=xxxxx",
			'call_id' : 'kjhkjbkjbglk;lkhb',
			'cseq' : count++ + " INVITE",
			'subject' : subject,
			'contact' : "<sip:" + user_a + "@" + user_a + "-" + client_device + "." + dest_domain_name + ">"
	}
		for(var property in request){
			alert(property + " : " + request[property]);
		}
		//пока запрос никуда отправлять не будем. поработаем с HTML и CSS.
		//создадим форму для настройки телефона и сеанса
		
	};
	
	this._Ack = function(){ 
		
	};
	
	this._Bye = function(){
		
	};
	
	this._Cancel = function(){
		
	};
	
	this._Register = function(){
		
	};
	
	this._Options = function(){
		
	}
}

window.onload = function(){
	softphone = new SoftPhone();
	//берем настройки
	//они должны быть получены путем ajax-запроса. для этого нужно создать базу данных с настройками телефонов
	$.ajax()
	$('#call_button').on('click', function(){

		var called_number = $('#user_b_number').text();
		var current_port = $('#port').text();
		var current_subject = $('#subject').text();
		softphone.call(called_number, current_port, current_subject);
	});

};