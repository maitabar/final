<?php
	session_start();

	$data = new mysqli("localhost","root","","final");
	$check = $data->query("SELECT * FROM user WHERE login ='$_SESSION[login]';");
	$row = $check->fetch_row();
	$_SESSION['id'] = $row[0];
?>

<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="main">
		<div class="head">
			<?php include('../css/header.php'); ?>
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
				<form class='add_news' action="../php/admin_query.php" method="POST">
					<p style="color:red;">1) INSERT INTO `user`(`id`, `username`, `surname`, `login`, `password`, `city`, `image_src`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])</p>
					<p style="color:green;">2) UPDATE `user` SET `id`=[value],`username`=[value],`surname`=[value],`login`=[value],`password`=[value],`city`=[value],`image_src`=[value] WHERE 1</p>
					<p style="color:blue;">3) DELETE FROM `user` WHERE 1</p>
					<br>
					<ol>
						<li>
							`user`
							<ul>
								<li>id</li>
								<li>username</li>
								<li>surname</li>
								<li>login</li>
								<li>password</li>
								<li>city</li>
								<li>image_src</li>
							</ul>
						</li>
						<li>
							`wall`
							<ul>
								<li>id</li>
								<li>text</li>
								<li>image</li>
							</ul>
						</li>
						<li>
							`chat`
							<ul>
								<li>from_mess</li>
								<li>to_mess</li>
								<li>message</li>
							</ul>
						</li>
					</ol>
					<input type="text" name="query" style="width:600px; margin:30px">
					<input type="submit" value="Make it">
				</form>				
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
</html> 
