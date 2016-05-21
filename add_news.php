<?php
	session_start();

	$text_news = htmlspecialchars($_POST['text_news']);

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT * FROM wall WHERE id='$_SESSION[id]'");
	$row = $check->fetch_row(); #array assoc row

	move_uploaded_file($_FILES['img_news']['tmp_name'], '../img/wall/'.$_FILES['img_news']['name']);
	echo $row[0]."asdfasdf";
	echo "string";

	if(isset($row[0])){
		$row[1] = $text_news.'^'.$row[1] ;           
		$row[2] = $_FILES['img_news']['name'].'^'.$row[2];
		$data -> query("UPDATE wall SET text='$row[1]', image='$row[2]' WHERE id='$_SESSION[id]'; ");
	} else if(!isset($row[0])) {
		$data->query("INSERT INTO wall VALUES('$_SESSION[id]','$text_news','".$_FILES['img_news']['name']."');");
	}
	header("Location: ../html/main.php");
?>