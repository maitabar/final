<?php
	$message = htmlspecialchars($_REQUEST['message']);
	$from_mess = htmlspecialchars($_REQUEST['from_mess']);
	$to_mess = htmlspecialchars($_REQUEST['to_mess']);

	$conn = new mysqli("localhost","root","","final");
	$conn -> query("INSERT INTO `chat`(`from_mess`, `to_mess`, `message`) VALUES ('$from_mess', '$to_mess', '$message');");

	$result = $conn->query("SELECT * FROM `chat` WHERE(from_mess=$from_mess and to_mess=$to_mess) or (from_mess=$to_mess and to_mess=$from_mess);");

	while($array = mysql_fetch_array($result)){
		if($array['from_mess']==$from_mess){
			echo "<div class = show_mess_from>" .$array['message']. "</div><br>";
		} else {
			echo "<div class = show_mess_to>" .$array['message']. "</div><br>";
		}
	}


?>