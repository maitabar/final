<?php
	session_start();
?>
<?php 
	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);

	$conn = new mysqli("localhost","root","","final");
	$check = $conn->query("SELECT * FROM user WHERE login='$login'");
	$row = $check->fetch_row(); #array assoc row
	if(isset($row[3])){
		if($password==$row[4]){
			if($login =='admin'){
				$_SESSION['login'] = $login;
				header("location: ../html/admin.php");
			} else {
				$_SESSION['login'] = $login;
				header("location: ../html/main.php");
			}
		}
		else{echo "password is incorrect";}
	}
	else{ echo "this login is not registrated"; }	

?>