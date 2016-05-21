<?php
	session_start();

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT * FROM user WHERE login ='$_SESSION[login]';");
	$row = $check->fetch_row();
	$_SESSION['id'] = $row[0];
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
				<?php
					$result = $data->query("SELECT id, username, surname, image_src, city FROM user;");
				    
				    if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					    	if($row['image_src']==""){ 
					    		$row['image_src']='not_exist.jpg'; 
					    	};
					        echo "<form class='add_news' action='messages.php' method='GET'>".
					        		"<img src='../img/profile/".$row['image_src']." ' class='ava_friends'>".
					        		"<p> ".$row['username']." ".$row['surname']."</p>".
					        		"<p> City: ".$row['city']."</p>".
					        		"<input type='text' value='".$row['id']."' name='to_mess' style='display:none;'></input>".
					        		"<input type='text' value='".$_SESSION['id']."' name='from_mess' style='display:none;'></input>".
					        		"<input type='submit' name='start_chat' value='start chat' class='start_chat'></input>".
					        	"</form>";
					        	
					    }
					}
			
				?>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
</html> 
