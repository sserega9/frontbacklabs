<?php 

include "configs/db.php";

if (isset($_POST["email"]) && isset($_POST["password"]) && 
	$_POST["email"] != "" && $_POST["password"] != "") {

	$sql = "SELECT * FROM users WHERE email LIKE '".$_POST["email"]."' AND password LIKE '".$_POST["password"]."'";

	// Выпоолнить sql запрос в базе данных.
	$result = mysqli_query($connect, $sql);

	// Количество полученых ррезультатов.
	$numOfUsers = mysqli_num_rows($result);

	if ($numOfUsers == 1) {

		$user = mysqli_fetch_assoc($result); 
		// Создаём куки для хранения данных пользователя.
		setcookie("user_id", $user["id"], strtotime("+30 days"));
		session_start();
		$_SESSION['name'] = $user["name"];
		$_SESSION['email'] = $user["email"];
		$_SESSION['password'] = $user["password"];

		header("Location: http://frontbacklabs.local/Fromt&Back_Labs/");
		
	} else {

		header("Location: http://frontbacklabs.local/Fromt&Back_Labs/signup.php");

	}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Log in</title>
</head>
<body>

	<br>
	<br>
	<br>

	<div id="autorisation">

		<form action="login.php" method="POST">

			<div id="title">
				<h2>Authorization</h2>
				<h5>Enter your credentials to log in.</h5>
			</div>

			<hr><br>

			<div id="polya">

			<p id="first_pole">
				Email<br/>
				<input type="text" name="email">
			</p>

			<p id="#">
				Password<br/>
				<input type="password" name="password">
			</p>

			<p id="btn">
				<button type="submit">Log in</button>
			</p>

			<a href="http://frontbacklabs.local/Fromt&Back_Labs/signup.php">I don't have an account, sign up.</a>


			</div>

			
			
		</form>
		
	</div>
	
</body>