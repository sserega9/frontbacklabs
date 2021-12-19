<?php 

	$autarisation = null;

	if ( isset($_COOKIE["user_id"])) {
		$autarisation = $_COOKIE["user_id"];
	}

	if ($autarisation === null) {
		header("Location: http://frontbacklabs.local/Fromt&Back_Labs/login.php");
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Labs</title>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon3.png" type="image/x-icon"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">

</head>
<body>
	<div class="hamburger-menu">
		  <input id="menu__toggle" type="checkbox" />
		  <label class="menu__btn" for="menu__toggle">
		    <span></span>
		  </label>
		  <ul class="menu__box">
		    <li><a class="menu__item" href="index.php">Головна</a></li>
		    <li><a class="menu__item" href="labs/lab1.php">Лабораторна робота №1</a></li>
		    <li><a class="menu__item" href="labs/lab2.php">Лабораторна робота №2</a></li>
		    <li><a class="menu__item" href="labs/lab3.php">Лабораторна робота №3</a></li>
		    <li><a class="menu__item" href="labs/lab4.php">Лабораторна робота №4</a></li>
		    <li><a class="menu__item" href="labs/lab5.php">Лабораторна робота №5</a></li>
		    <li><a class="menu__item" href="labs/lab6.php">Лабораторна робота №6</a></li>
		    <li><a class="menu__item" href="labs/lab7.php">Лабораторна робота №7</a></li>
		    <li><a class="menu__item" href="labs/lab8.php">Лабораторна робота №8</a></li>
		    <li><a class="menu__item" href="labs/lab9.php">Лабораторна робота №9</a></li>
		    <li><a class="menu__item" href="exit.php">Вихід</a></li>
		  </ul>
	</div>

	<header id="header" class="header">
		<h1 class="header__text">Звіт з лабораторних робіт<br>з дисципліни "Розроблення WEB-застосувань"</h1>
	</header>

	<div class="post-wrap">
		<div class="post-item">
			<div class="item-content">
				<div class="item-icon group">
					<img src="img/Maxim.jpg" alt="Empty">
				</div>
				<div class="item-body">
					<h3>Каптур Максим</h3>
					<p>Студент групи ІВ-91. Бригада 12</p>
				</div>
				<div class="item-footer">
					<hr>
				</div>
			</div>
		</div>

		<div class="post-item">
			<div class="item-content">
				<div class="item-icon tree">
					<img src="img/Serega.jpeg" alt="Empty">
				</div>
				<div class="item-body">
					<h3>Бурбело Сергій</h3>
					<p>Студент групи ІВ-91. Бригада 12</p>
				</div>
				<div class="item-footer">
					<hr>
				</div>
			</div>
		</div>

		<div class="post-item">
			<div class="item-content">
				<div class="item-icon anchor">
					<img src="img/Vova.jpg" alt="Empty">
				</div>
				<div class="item-body">
					<h3>Карамшук Володимир</h3>
					<p>Студент групи ІВ-91. Бригада 12</p>
				</div>
				<div class="item-footer">
					<hr>
				</div>
			</div>
		</div>

	</div>

</body>
</html>