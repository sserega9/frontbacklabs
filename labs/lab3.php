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
	<title>Lab3</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab3.css">
	<script src="../js/lab3.js"></script>
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

	<header id="header" class="header">
		<h1 class="header__text">Лабораторна робота №3</h1>
	</header>

	<div class="content">

		<div class="sidebar">
		
 			<table>
				<tr>
					<td id="nav1" onclick="row1()">
						<a href="#"><div class="sidebar_row">Тема. Мета</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav2" onclick="row2()">
						<a href="#"><div class="sidebar_row">Зовнішній вигляд макету</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav3" onclick="row3()">
						<a href="#"><div class="sidebar_row">HTML-код макету</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav4" onclick="row4()">
						<a href="#"><div class="sidebar_row">Розмітка сторінки за допомогою таблиці</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav5" onclick="row5()">
						<a href="#"><div class="sidebar_row">Розмітка сторінки за допомогою плаваючих блоків</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav6" onclick="row6()">
						<a href="#"><div class="sidebar_row">HTML-код сторінки завданн</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav7" onclick="row7()">
						<a href="#"><div class="sidebar_row">CSS-код сторінки завдання</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav8" onclick="row8()">
						<a href="#"><div class="sidebar_row">Висновки</div></a>
					</td>
				</tr>
			</table>
		</div>

		<div class="rows">

			<div id="row0">
				<img src="../img/box.png" alt="lorem" width="200px" height="200px">
			</div>

			<div id="row1">
				<h1>Тема:</h1>
				<h3>БЛОЧНА ВЕРСТКА HTML-ДОКУМЕНТУ ЗА МАКЕТОМ. ВЕРСТКА ЗАСОБАМИ CSS та FLEXBOX.</h3><br>

				<h1>Мета:</h1>
				<h3>придбати практичні навички роботи  верстки сторінок засобами CSS, верстки на основі плаваючих елементів, з’ясувати переваги та недоліки типів макетів веб-сторінок, придбати практичні навички роботи верстки сторінок засобами CSS та FLEXBOX   </h3><br>
				<h3>Посилання на наш веб сайт:</h3>
				<a href="../proBookwebpage.html"> Сайт з продажу книг</a>
			</div>

			<div id="row2">
				<h1>Макет</h1><br>
				<div class="left_50">
				</div>
				<div class="right_50">
				</div>
			</div>

			<div id="row3">
				<div class="left_50">
				</div>
				<div class="right_50">
				</div>
				
			</div>

			<div id="row4">
				<h1>Розмітка сторінки за допомогою таблиці</h1>
				
			</div>

			<div id="row5">
				<div class="left_50">
				</div>
				<div class="right_50">
				</div>
				
			</div>

			<div id="row6">
				<div class="left_50">
				</div>
				<div class="right_50">
				</div>
				
			</div>

			<div id="row7">
				<div class="left_50">
				</div>
				<div class="right_50">
				</div>
			</div>

			<div id="row8">
				<h1>Висновки:</h1><br>
				<p>
					Під час виконання лабораторної роботи ми придбали практичні навички верстки сторінок засобами CSS та FLEXBOX, верстки на основі плаваючих елементів, з’ясувати переваги та недоліки типів макетів веб-сторінок.
				</p>
			</div>
		</div>
	</div>
</body>
</html>