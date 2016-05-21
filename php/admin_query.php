<?php
	
	$query = htmlspecialchars($_POST['query']);
	$conn = new mysqli('localhost','root','','final');
	$conn -> query($query);
	header('Location: ../html/admin.php');
?>