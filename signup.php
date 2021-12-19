<?php 

include "configs/db.php";

if ( isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) ) {

	if (isset($_POST["name"]) != "" && $_POST["email"] != "" && $_POST["password"] != "") {

		$sql = "INSERT INTO users (name, email, password) VALUES ('" .$_POST["name"]. "', '" .$_POST["email"]. "', '" .$_POST["password"]. "')";

		if (mysqli_query($connect, $sql)) {
			
			header("Location: http://frontbacklabs.local/Fromt&Back_Labs/index.php");
			echo "<script> alert(\"New user added successfully!\"); </script>";

		}

	} else {

		header("Location: http://frontbacklabs.local/Fromt&Back_Labs/signup.php");
		echo "<script> alert(\"Enter a righr data!\"); </script>";

	}

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Sign up</title>
</head>
<body>

	<div id="register">

		<form action="signup.php" method="POST">

		<div id="title">
			<h2>Registration</h2>
			<h5>Fill in just a couple of fields to have access to lab works.</h5>
		</div>

		<hr><br>
		
		<div id="polya">

			<p>
				Nickname<br/>
				<input type="text" name="name">
			</p>

			<p>
				Email:<br/>
				<input type="text" name="email">
			</p>

			<p>
				Password:<br/>
				<input type="password" name="password">
			</p>

			<p id="politiks">
				By clicking this button you agree to the processing of your personal data.
			</p>

			<p id="btn">
				<button type="submit">Sign up</button>
			</p>

			<a href="http://frontbacklabs.local/Fromt&Back_Labs/login.php">If you have already registered, log in.</a>
			
		</div>
		
		</form>
		
	</div>
	
</body>
</html>