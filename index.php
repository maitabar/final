<html>
<head>
	<title>KZbailanys</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="main">
		<div class="head">
			<?php include('css/header.php'); ?>
		</div>
		<div class="menu_div">
			<form action="php/login.php" method="POST">
				<label class="regis">Login</label>
				<input type="text" class="input" placeholder="username" name="login"></input><hr>
				
				<label class="regis">User password</label>
				<input type="password" class="input" placeholder="password" name="password"></input><hr>

				<input type="submit" class="regis_button" name="registr" value="login"></input>
			</form>
		</div>
		<div class="body">
			<div class="registr">
				<form action="php/registr.php" method="POST" enctype="multipart/form-data">
					<label class="regis">Name</label>
					<input type="text" class="input" placeholder="username" name="username" required></input><hr>
					
					<label class="regis">Surname</label>
					<input type="text" class="input" placeholder="surname" name="surname" required></input><hr>
					
					<label class="regis">Login</label>
					<input type="text" class="input" placeholder="login" name="login" required></input><hr>
					
					<label class="regis">User password</label>
					<input type="password" class="input" placeholder="password" name="password" required></input><hr>
					
					<label class="regis">Repeat password</label>
					<input type="password" class="input" placeholder="password" name="rpassword" required></input><hr>
					
					<label class="regis">City</label>
					<input type="text" class="input" placeholder="city" name="city" required></input><hr>
					
					<label class="regis">Image</label>
					<input type="file" name='image'></input>

					<input type="submit" class="regis_button" name="registr" value="registrate"></input>
				</form>
		</div>
		</div>
	</div>
</body>
</html> 
