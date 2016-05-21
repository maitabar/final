<?php 
	session_start();
	$username = htmlspecialchars($_POST['username']);
	$surname = htmlspecialchars($_POST['surname']);
	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);
	$rpassword = htmlspecialchars($_POST['rpassword']);
	$city = htmlspecialchars($_POST['city']);

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT login FROM user WHERE login='$login'");
	$row = $check->fetch_row(); #array assoc row

	
	if(isset($row[0])){
		echo "this login is also exsit";}
	else{
		if($password===$rpassword){
			move_uploaded_file($_FILES["image"]["tmp_name"], "../img/profile/" . $_FILES["image"]["name"]);

			$query = "INSERT INTO user (`username`,`surname`,`login`,`password`,`city`,`image_src`) VALUES('$username','$surname','$login','$password','$city','".$_FILES['image']['name']."')";
			$data -> set_charset('utf8');
			$data -> query($query);
			$_SESSION['login'] = $login;
			header("Location: ../html/main.php");
		}
		else{echo "passwords must much";}
	}
	
?>