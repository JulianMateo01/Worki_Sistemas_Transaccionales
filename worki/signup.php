<?php 

	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$signup = new Signup();
		$result = $signup->evaluate($_POST);
		
		if($result != "")
		{

			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>Ha ocurrido un error:<br><br>";
			echo $result;
			echo "</div>";
		}else
		{

			header("Location: login.php");
			die;
		}
 

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];

	}


	

?>

<html> 

	<head>
		
		<title>Worki | Registrate</title>
	</head>

	<style>
		
		#bar{
			height:100px;
			background-color: rgb(105, 0, 0);
			color: #ffffff;
			padding: 4px;
		}

		#signup_button{

			background-color: #ffffff;
			width: 70px;
			text-align: center;
			padding:4px;
			border-radius: 4px;
			float:right;
		}

		#bar2{

			background-color: white;
			width:800px;
			margin:auto;
			margin-top: 50px;
			padding:10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;

		}

		#text{

			height: 40px;
			width: 300px;
			border-radius: 4px;
			border:solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}

		#button{

			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border:none;
			background-color: rgb(105, 0, 0);
			color: white;
		}

	</style>

	<body style="font-family: tahoma;background-color: #e9ebee;">
		
		<div id="bar">

			<div style="font-size: 60px;">Worki</div>
			<a href="login.php">
			<div id="signup_button">Ingresa</div>
			</a>
		</div>

		<div id="bar2">
			
			Resgistrate en Worki<br><br>

			<form method="post" action="">

				<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="Nombres"><br><br>
				<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Apellidos"><br><br>

				<span style="font-weight: normal;">Genero:</span><br>
				<select id="text" name="gender">
					
					<option><?php echo $gender ?></option>
					<option>Masculino</option>
					<option>Femenino</option>
				</select>
				<br><br>
				<input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email"><br><br>
				
				<input name="password" type="password" id="text" placeholder="Contraseña"><br><br>
				<input name="password2" type="password" id="text" placeholder="Ingrese de nuevo la Contraseña"><br><br>

				<input type="submit" id="button" value="Registrarse">
				<br><br><br>

			</form>

		</div>

	</body>


</html>