$i = 2
function key(e){
	if(e.which==13){
		$i += 1;
		$('textarea').attr("rows", $i);
	}

	if(e.which == 8 || e.which == 46){
		$i -= 1;
		$('textarea').attr("rows", $i);
	}
	if($('textarea').val() != ""){
     		$('#button_news').removeAttr('disabled');
     	}
}

function submit_messages(){
	if(form1.message.value == ''){
		alert( 'We can not send white spaces!!!');
		return;
	}
	var message = form1.message.value;
	var from_mess = form1.from_mess.value;
	var to_mess = form1.to_mess.value;

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			$("#chatlogs").append('<div class = show_mess_from>'+$(".text_news").val()+'</div>');
			$('.text_news').val('');
		}
	}	

	xmlhttp.open('GET', '../php/send_message.php?from_mess='+from_mess+'&to_mess='+to_mess+'&message='+message, true);
	xmlhttp.send();

}
















