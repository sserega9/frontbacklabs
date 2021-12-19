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
	<title>Lab4</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab4.css">
	<script src="../js/lab4.js"></script>

	<script type="text/javascript">
		
		function example4() {
			alert("Це 4 приклад - реалізований за допомогою методу вставки")
		}

	</script>
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
		<h1 class="header__text">Лабораторна робота №4</h1>
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
						<a href="#"><div class="sidebar_row">Способи функціонального застосування JS</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav4">
						<a href="lab4_variants/lab4_variant2.html"><div class="sidebar_row">П.6 - Варіант 2</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav5">
						<a href="lab4_variants/lab4_variant3.html"><div class="sidebar_row">П.6 - Варіант 3</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav6">
						<a href="lab4_variants/lab4_variant4.html"><div class="sidebar_row">П.6 - Варіант 4</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav7" onclick="row7()">
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
				<h3>
					ФУНКЦІОНАЛЬНЕ ЗАСТОСУВАННЯ JAVASCRIPT У HTML-ДОКУМЕНТІ. КЛАСИ,ОБ’ЄКТИ, ФУНКЦІЇ,  В МОВІ JAVASCRIPT. ПОДІЇ ТА ОБРОБКА ПОДІЙ. ПРОГРАМНА ВЗАЄМОДІЯ З HTML ДОКУМЕНТАМИ НА ОСНОВІ DOM АРІ
				</h3><br>

				<h1>Мета:</h1>
				<h3>
					Придбати практичні навички роботи маніпулювання інформаційним вмістом Web-документа засобами мови JavasSript, використання об’єктів,масивів, функцій, подій, обробників подій у сценаріях на мові JavasSript
				</h3><br>
			</div>

			<div id="row2">
				<h1>Способи функціонального застосування JS</h1><br>

				<h2>• гіпертекстове посилання (схема URL):</h2><br>
				<a class="button" href="JavaScript:alert('Це приклад застосування JS за допомогою гіпертекстового посилання');">Run example</a><br><br>

				<img src="lab4_variants/img/ex1.png" width="50%"><br><br><br>

				<h2>• обробник події (handler):</h2><br>
				<a class="button" onclick="example2();">Run example</a><br><br>

				<script type="text/javascript">
					function example2() {
						alert("Це також приклад застосування JS, але вже за допомогою обробник події");
					}
				</script>

				<img src="lab4_variants/img/ex2.png" width="50%"><br><br><br>

				<h2>• підстановка (entity):</h2><br>

				<select name="Choise" id="ex_text" class="basik_input">
					<option value="Обране пусте поле(">Оберіть щось</option>
				  	<option value="Це приклад застосування JS за допомогою підстановка">Це приклад застосування JS за допомогою підстановка</option>
				  	<option value="Карамшук Володимир">Студент 1</option>
				  	<option value="Бурбело Сергій">Студент 2</option>
				  	<option value="Каптур Максим">Студент 3</option>
				</select>

				<script type="text/javascript">

					function example3() {
						alert(document.getElementById('ex_text').value);
					}
					
				</script>

				<a class="button" onclick="example3();">Run example</a><br><br>

				<img src="lab4_variants/img/ex3.png" width="50%"><br><br><br>

				<h2>• вставка (тег SCRIPT):</h2><br>

				<a class="button" onclick="example4();">Run example</a><br><br>

				<img src="lab4_variants/img/ex4.png" width="50%"><br><br><br>

			</div>

			<div id="row7">
				<h1>Висновки:</h1><br>
				<p>
					Під час виконання лабораторної роботи ми придбали практичні навички роботи та маніпулювання інформаційним вмістом Web-документа засобами мови JavasSript, використовували об’єкти, масиви, функції, події, обробники подій у сценаріях на мові JavasSript.
				</p>
			</div>
		</div>
	</div>
</body>
</html>