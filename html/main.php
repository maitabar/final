<?php
	session_start();

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT * FROM user WHERE login ='$_SESSION[login]';");
	$row = $check->fetch_row();
	$_SESSION['id'] = $row[0];
?>

<html>
<head>
	<title>KZbailanys</title>
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

				<form class='add_news' action="../php/add_news.php" method="POST" enctype="multipart/form-data">

					<textarea name="text_news" rows="2" class="text_news" onkeypress="key(event);" placeholder=""></textarea>

				    <label for="file-input">
				        <img src="../img/img_news.jpg" class="img_news">
				    </label> 
				    <input id="file-input" type="file" name="img_news" style="display: none"></input>

					<input type="submit" class="button_news" id="button_news" name='butt_news' value="Add news" disabled></input>
				</form>	
				<div>
					<?php
						$all_wall = $data->query("SELECT * FROM wall WHERE id ='$_SESSION[id]';");
						$wall_row = $all_wall->fetch_row();
						
						$wall_text = explode("^",$wall_row[1]);
						$wall_image = explode("^",$wall_row[2]);
						$wall_number = count(explode("^",$wall_row[1]));
						
						echo $wall_number;
						
						if($wall_number>0){
							for ($i=0; $i < $wall_number; $i++) { 
								if($wall_image[$i]==""){
									echo "  <div class='add_news'>	<p>$wall_text[$i]</p>
							 			</div>";
								} else{
							 	echo "  <div class='add_news'>	<p>$wall_text[$i]</p>
							 				<div style='margin-left:20px;'><img src = '../img/wall/$wall_image[$i]' class='wall_picture'/></div>
							 			</div>";
							 	}		
							 } 
						}

					?>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
</html> 
