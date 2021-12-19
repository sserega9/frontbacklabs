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
	<title>Lab2</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab2.css">
	<script src="../js/lab2.js"></script>
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
		<h1 class="header__text">Лабораторна робота №2</h1>
	</header>

	<div class="content">

		<div class="sidebar">
		
 			<table>
				<tr>
					<td id="nav1" onclick="row1()">
						<a href="#"><div class="sidebar_row">Тема. Мета. Місце розташування звіту, сайту</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav2" onclick="row2()">
						<a href="#"><div class="sidebar_row">Списки</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav3" onclick="row3()">
						<a href="#"><div class="sidebar_row">Ідентифікатори</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav4" onclick="row4()">
						<a href="#"><div class="sidebar_row">Відступи</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav5" onclick="row5()">
						<a href="#"><div class="sidebar_row">Плаваючі елементи</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav6" onclick="row6()">
						<a href="#"><div class="sidebar_row">Селектор тегу і класу</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav7" onclick="row7()">
						<a href="#"><div class="sidebar_row">Інші селектори</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav8" onclick="row8()">
						<a href="#"><div class="sidebar_row">Групування селекторів</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav9" onclick="row9()">
						<a href="#"><div class="sidebar_row">Висновок</div></a>
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
				<h3>КАСКАДНІ ТАБЛИЦІ СТИЛІВ. СЕЛЕКТОРИ .ІДЕНТИФІКАТОРИ. СТИЛЬОВЕ ОФОРМЛЕННЯ ТЕКСТОВИХ ЕЛЕМЕНТІВ В HTML-ДОКУМЕНТАХ.</h3><br>

				<h1>Мета:</h1>
				<h3>придбати практичні навички роботи  з селекторами,ідентифікаторами, списками, 
					різноманітними властивостями кольору і фону,  зовнішними та внутрішними  відступами,  
					плаваючими елементами, оформленням текстових елементів</h3><br>
				<h3>Посилання на наш веб сайт:</h3>
				<a href="../proBookwebpage.html"> Сайт з продажу книг</a>
			</div>

			<div id="row2">
				<h1>Списки</h1><br>
				<div class="left_50">
					<h2>Нумерований список</h2>
					<ol class="rectangle">
					  <li><a href="#">Перший елемент списка</a></li>
					  <li><a href="#">Другий елемент списка</a></li>
					  <li><a href="#">Третій елемент списка</a></li>
					  <li><a href="#">Четвертий елемент списка</a></li>
					  <li><a href="#">П'ятий елемент списка</a></li>
					</ol>

					<h2 id="second_header">Маркерований список</h2>
					<ul class="zebra">
					  <li>Перший елемент списка</li>
					  <li>Другий елемент списка</li>
					  <li>Третій елемент списка</li>
					  <li>Четвертий елемент списка</li>
					  <li>П'ятий елемент списка</li>
					</ul>
				</div>
				<div class="right_50">
					<h2>Cтилі в css</h2>
					<img src="../img/list1.png" width="300" height="500" alt="Empty">
					<img src="../img/list2.png" width="200" height="300" alt="Empty">
					<!-- &lt;ol class="rectangle"&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;&lt;a&gt;Перший елемент списка&lt;/a&gt&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;&lt;a&gt;Другий елемент списка&lt;/a&gt&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;&lt;a&gt;Третій елемент списка&lt;/a&gt&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;&lt;a&gt;Четвертий елемент списка&lt;/a&gt&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;&lt;a&gt;П'ятий елемент списка&lt;/a&gt;&lt;/li&gt;<br>
					&lt;/ol&gt;&lt;br&gt;<br><br> -->
					<!-- &lt;ul class="zebra"&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;Перший елемент списка&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;Другий елемент списка&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;Третій елемент списка&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;Четвертий елемент списка&lt;/li&gt;<br>
						&nbsp;&nbsp;&lt;li&gt;П'ятий елемент списка&lt;/li&gt;<br>
					&lt;/ul&gt;<br> -->

				</div>
			</div>

			<div id="row3">
				<div class="left_50">
					<h2>Використання ідентифікатора</h2>
					<img src="../img/identificator_site.jpg" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Iдентифікатор в css</h2>
					<img src="../img/identificator_code.jpg" alt="Empty">
				</div>
				
			</div>

			<div id="row4">
				<div class="left_50">
					<h2>Використання відступів</h2>
					<img src="../img/margin_site.jpg" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Віддступи в css</h2>
					<img src="../img/margine_code.jpg" alt="Empty">
				</div>
				
			</div>

			<div id="row5">
				<div class="left_50">
					<h2>Використання плаваючих елементів</h2>
					<img src="../img/float_site.jpg" width="200" height="200" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Плаваючі елементи в css</h2>
					<img src="../img/float_code.jpg" alt="Empty">
				</div>
				
			</div>

			<div id="row6">
				<div class="left_50">
					<h2>Використання селекторів тегу і класу</h2>
					<img src="../img/tegclas_site.jpg" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Cелектори тегу і класу</h2>
					<img src="../img/teg-class.png" width="600" alt="Empty">
				</div>
				
			</div>

			<div id="row7">
				<div class="left_50">
					<h2>Інші селектори на сторінці </h2>
					<img src="../img/selector_droup.png" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Інші селектори в меню</h2>
					<img src="../img/selector_droup2.png" height="500" alt="Empty">
				</div>
			</div>

			<div id="row8">
				<div class="left_50">
					<h2>Груповані селектори на сторінці </h2>
					<img src="../img/group11.png" alt="Empty">
				</div>
				<div class="right_50">
					<h2>Груповані селектори в меню</h2>
					<img src="../img/group12.png" alt="Empty">
				</div>
			</div>

			<div id="row9">
				<h1>Висновки:</h1><br>
				<p>Під час виконання лабораторної роботи нами ми засвоїли базові знання для робити з каскадними таблицями стилів(CSS). Навчилися працювати з селекторами, ідентифікаторами, списками, різноманітними властивостями кольору і фону, зовнішними та внутрішними  відступами, плаваючими елементами, оформленням текстових елементів. Також нами створено шаблон звітного HTML-документа для Лабораторної роботи №2 де відображені результати роботи нашої роботи.
			</div>
		</div>
	</div>
	
</body>
</html>