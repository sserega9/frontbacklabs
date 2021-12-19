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
	<title>Lab1</title>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon"> 
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab1.css">
	<script src="../js/main.js"></script>
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
		<h1 class="header__text">Лабораторна робота №1</h1>
	</header>

	<div class="content">

		<div class="sidebar">
		
 			<table>
				<tr>
					<td id="nav1" onclick="row1()">
						<a href="#"><div class="sidebar_row">Опис предметного середовища</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav2" onclick="row2()">
						<a href="#"><div class="sidebar_row">Тема. Мета. Розташування Лаб №1</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav3" onclick="row3()">
						<a href="#"><div class="sidebar_row">Структура документа</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav4" onclick="row4()">
						<a href="#"><div class="sidebar_row">HTML-код таблиць</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav5" onclick="row5()">
						<a href="#"><div class="sidebar_row">HTML-код форми</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav6" onclick="row6()">
						<a href="#"><div class="sidebar_row">HTML-код зображень</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav7" onclick="row7()">
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
				<h1>Опис предметного середовища</h1><br>
				<p> Інтернет-магазин "proBook"- веб-сайт для покупки книг. На ньому користувачам буде доступна можливисть обирати та замовляти книги.</p><br>
				<h4>На сайті реалізовані наступні функції:</h4>
				<ul>
					<li>реєстрація та авторизація користувачів</li>
					<li>навігація сайту</li>
					<li>каталог з різними книгами</li>
					<li>фільтри для вибору книг</li>
					<li>залишати свої повідомлення, коментарі</li>
					<li>здійснювати купівлю обраного товару</li>
					<li>кошик для покупок</li>
					<li>додавання книжок до списку "обраних"(тільки для авторизованих користувачів)</li>
					<li>можливість переглядати "demo-версію" книги(тільки для авторизованих користувачів)</li>
					<li>контактна інформація</li>
					<li>посилання на соц.мережі</li>
				</ul>
			</div>

			<div id="row2">
				<h1>Тема:</h1>
				<h3>Структура HTML-документа. Вибір предметної галузі. Робота з посиланнями, таблицями, зображеннями, формами в HTML-документі.</h3><br>

				<h1>Мета:</h1>
				<h3>Придбати практичні навички роботи  з HTML-документом, таблицями,формами, зображеннями, посиланнями.
				Створити шаблон звітного HTML-документом для відображення результатів роботи всіх лабораторних робіт.</h3><br>
				<h3>Посилання на наш веб сайт:</h3>
				<a href="../proBookwebpage.html"> Сайт з продажу книг</a>
			</div>

			<div id="row3">
				<h1>Базова структура HTML-документа:</h1><br>
				<p>&lt;!DOCTYPE html&gt;<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Визначає тип документа --><br />
				&lt;html lang="ru"&gt;<br/>
				&lt;head&gt;<br />
				&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br />
				&nbsp;&nbsp;&lt;title&gt;Title&lt;/title&gt;<br />
				&lt;/head&gt;<br />
				&lt;body&gt;<br />
				&lt;/body&gt;<br />
				&lt;/html&gt;<br /></p>

			</div>

			<div id="row4">
				<h1>Створення таблиць</h1><br>
				<table border="2">
					<caption>Table</caption>
				   <tr>
				    <td>Комірка 1</td>
				    <td>Комірка 2</td>
				    <td>Комірка 3</td>
				    <td>Комірка 4</td>
				    <td>Комірка 5</td>
				    <td>Комірка 6</td>
				    <td>Комірка 7</td>
				    <td>Комірка 8</td>
				    <td>Комірка 9</td>
				    <td>Комірка 10</td>
				   </tr>
				   <tr>
				    <th>Комірка 1</th>
				    <th>Комірка 2</th>
				    <th>Комірка 3</th>
				    <th>Комірка 4</th>
				    <th>Комірка 5</th>
				    <th>Комірка 6</th>
				    <th>Комірка 7</th>
				    <th>Комірка 8</th>
				    <th>Комірка 9</th>
				    <th>Комірка 10</th>
				  </tr>
				 </table>
				 <br>

				 <!-- Елемент &lt;table&gt;&lt;table/&gt; служить контейнером для елементів, що визначають вміст таблиці.<br>
				 &lt;caption&gt;&lt;caption/&gt; - Визначає заголовок таблиці<br>
				 &lt;th&gt;&lt;th/&gt; - Визначає чарунку заголовка в таблиці<br>
				 &lt;tr&gt;&lt;tr/&gt; - Визначає рядок в таблиці<br> -->
				
			</div>

			<div id="row5">
				<form action="#">
					<p><b>Заповніть форму</b></p><br>

					<label for="name">Name:</label><br>
					<input type="text" id="name" name="user_name"><br><br>

			        <label for="mail">E-mail:</label><br>
			        <input type="email" id="mail" name="user_mail"><br><br>

			        <label for="msg">Message:</label><br>
			        <textarea id="msg" name="user_message"></textarea><br><br>

					<p><input type="radio" name="answer" value="a1">Студент<Br>
					<input type="radio" name="answer" value="a2">Викладач<Br>
					<input type="radio" name="answer" value="a3">Інше</p><br>

					<p><input type="checkbox" name="answer" value="a1">Студент<Br>
					<input type="checkbox" name="answer" value="a2">Викладач<Br>
					<input type="checkbox" name="answer" value="a3">Інше</p><br>
					<p><input type="submit" value="Відправити"></p>
				</form>
				
			</div>

			<div id="row6">

				<img src="../img/logo.jpg" width="200" height="200" alt="lorem">
				<img src="../img/Maxim.jpg" width="250" height="350" alt="lorem">
				
			</div>

			<div id="row7">
				<h1>Висновок:</h1><br>
				<p>Під час виконання лабораторної роботи нами вивчено базову структуру HTML документа. 
				Здобуті базові навички щодо роботи з такими елементами як таблицямі,формамі, зображення, посилання.
				Також нами створено шаблон звітного HTML-документом для відображення результатів роботи всіх лабораторних робіт.
				Розроблено свій сайт з продажу книг на якому реалізовані базові функції такі як :таблиці,формами, зображення, посилання. 
				Для нього прописано бізнес-логіку.
			</div>
		</div>
	</div>
	
</body>
</html>