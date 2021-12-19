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
<head xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab9</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab7.css">

	<script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
	<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>	
	<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
	<script type='text/javascript' src='unitegallery/themes/tiles/ug-theme-tiles.js'></script>
	
</head>
<body>
	<div class="hamburger-menu">
		  <input id="menu__toggle" type="checkbox" />
		  <label class="menu__btn" for="menu__toggle">
		    <span></span>
		  </label>
		  <ul class="menu__box">
		    <li><a class="menu__item" href="../index.php">Головна</a></li>
		    <li><a class="menu__item" href="lab1.php">Лабораторна робота №1</a></li>
		    <li><a class="menu__item" href="lab2.php">Лабораторна робота №2</a></li>
		    <li><a class="menu__item" href="lab3.php">Лабораторна робота №3</a></li>
		    <li><a class="menu__item" href="lab4.php">Лабораторна робота №4</a></li>
		    <li><a class="menu__item" href="lab5.php">Лабораторна робота №5</a></li>
		    <li><a class="menu__item" href="lab6.php">Лабораторна робота №6</a></li>
		    <li><a class="menu__item" href="lab7.php">Лабораторна робота №7</a></li>
		    <li><a class="menu__item" href="lab8.php">Лабораторна робота №8</a></li>
		    <li><a class="menu__item" href="lab9.php">Лабораторна робота №9</a></li>
		    <li><a class="menu__item" href="../exit.php">Вихід</a></li>
		  </ul>
	</div>

	<div class="content">

		<h1>Лабораторна робота №9</h1><br>
		<h2>Тема: АСИНХРОННА ВЗАЄМОДІЯ КЛІЄНТСЬКОЇ І СЕРВЕРНОЇ ЧАСТИН WEB- ЗАСТОСУВАНЬ З ВИКОРИСТАННЯМ ТЕХНОЛОГІЇ AJAX. ФОРМУВАННЯ AJAX-ЗАПИТУ ЗАСОБАМИ JQUERY.</h2><br>

		<h2>Мета: придбати практичні навички роботи основ асинхронного обміну даними мовою JavaScript за допомогою технології Ajax та бібліотеки Jquery, формування  Аjax-запиту засобами jQuery при реалізації практичних задач Web-програмування. </h2>
		<h3>
		</h3>

		<a href="lab9_variants/photogallery.php">Фотогалерея</a>

	</div>


	
</body>
</html>