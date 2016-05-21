<?php
	session_start();

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT * FROM user WHERE login ='$_SESSION[login]';");
	$row = $check->fetch_row();
	$_SESSION['id'] = $row[0];
	if (isset($_GET['from_mess']) ) {
	$_SESSION["from_mess"] = htmlspecialchars($_GET['from_mess']);
	$_SESSION['to_mess'] = htmlspecialchars($_GET['to_mess']);
	}
?>

<html>
<head>
	<title>Message</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="main">
		<div class="head">
			<?php include('../css/header.php'); ?>
		</div>
		<div class="menu_div">
			<?php include('../css/menu.php'); ?>
		</div>
		<div class="body">
			<div class="body_top">
				<?php echo "Hello ", $row[1]; ?>
			</div>
			<div>
				<?php 
					if($row[6]==""){
						echo '<img class="ava" src="../img/profile/not_exist.jpg">';
					} else { 
						echo '<img class="ava" src="../img/profile/'.$row[6].'">';
					} 
				?>
				<div class="information">
					<?php echo "<br>Name : ".$row[1].'<br><br>'; ?>
					<?php echo "Surname : ".$row[2].'<br><br>'; ?>
					<?php echo "City : ".$row[5].'<br><br>'; ?>			
				</div>
			</div>
			<div class="wall">	
				<div class='add_news' id='chatlogs'>
					<?php include('../php/show_messages.php'); ?>
				</div>
				<form class='add_news' onsubmit="return false;" name="form1">
					<?php
						echo "<input type='text' value='".$_SESSION['from_mess']."' name='from_mess' style='display:none;'></input>".
					    	 "<input type='text' value='".$_SESSION['to_mess']."' name='to_mess' style='display:none;'></input>";
					?>
					<textarea name="message" rows="2" class="text_news" onkeypress="key(event);" placeholder="message"></textarea>
					<input type="submit" class="button_mess" onclick='submit_messages()' id="button_news" name='butt_message' value="Send message" disabled></input>
				</form>	
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
</html> 
