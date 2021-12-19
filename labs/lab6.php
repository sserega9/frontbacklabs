<?php

	include "../configs/db.php";

?>

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
	<title>Lab6</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab6.css">
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

		<!-- ------------------------------------------------- -->

		<h1>Лабораторна робота №6</h1>

		<h2>Тема: WEB-сервери та принципи їх роботи з користувачем. Серверні WEB-застосування.</h2>
		<br>
		<h2>Мета: придбати практичні навички встановлення та конфігурування WEB-сервера, встановлення та налаштування Apache.</h2>

		<!-- ------------------------------------------------- -->

		<h1>Установка web-сервера:</h1>

		<h2>1. Переходимо на сайт https://www.apachefriends.org/ru/index.html і скачуємо XAMPP</h2>
		<br>
		<img src="../img/u0.png" alt="Download xampp" width="800">
		<br><br>

		<h2>2. Починажмо установку -> на першому екрані нажимаємо Next</h2>
		<br>
		<div class="imgbox"><img src="../img/u1.png" alt="Step 1" width="600"></div>
		<br><br>

		<h2>3. Обираємо необхідні компоненти: MySQL, PHP, phpMyAdmin (Apache встановлюється по дефолту)</h2>
		<br>
		<img src="../img/u2.png" alt="Step 2" width="600">
		<br><br>

		<h2>4. Обираємо папку для розміщення</h2>
		<br>
		<img src="../img/u3.png" alt="Step 3" width="600">
		<br><br>

		<h2>5. Обираємо мову, тут тільки англійська або німецька</h2>
		<br>
		<img src="../img/u4.png" alt="Step 4" width="600">
		<br><br>

		<h2>6. Прибераємо галочку і тиснемо Next</h2>
		<br>
		<img src="../img/u5.png" alt="Step 5" width="600">
		<br><br>

		<h2>4. Чекаємо завершення установки</h2>
		<br>
		<img src="../img/u6.png" alt="Step 5" width="600">

		<!-- ----------------------------------------------------- -->

		<h1>Налаштування web-сервера:</h1>

		<h2>1. Треба відкрити блокнот від імені адміністратора</h2>
		<br>

		<h2>2. Потім в ньому відкрити файл hosts, що розміщений в C:\Windows\System32\drivers\etc\[всі файли]</h2>
		<br>

		<h2>3. В файлі hosts на останньому рядку написати: 127.0.0.1 localhost name.local</h2>
		<br>
		<img src="../img/n1.png" alt="Step 1" width="800">
		<br><br>

		<h2>2. Потім не виходячи з блокноту переходимо в файл httpd-vhosts.conf, що розміщений в D:\Downloads\xampp\apache\conf\extra\[всі файли], де D:\Downloads\ - це обрані мною диск та папка під час завантаження</h2>
		<br>

		<h2>3. Прибрати дві решітки перед NameVirtualHost *:80</h2>
		<br>
		<img src="../img/n3.png" alt="Step 2" width="500" height="400">
		<img src="../img/n2.png" alt="Step 3" width="500" height="400">
		<br><br>

		<h2>4. Додати наступні рядки в кінець файлу</h2>
<xmp>	
	<VirtualHost *:80>
	    DocumentRoot "D:\Downloads\xampp\htdocs\frontbacklabs.local"
	    ServerName Front&Back_Labs.local
	</VirtualHost>
</xmp>	
		<br>
		де D:\Downloads\xampp\htdocs\frontbacklabs.local - шлях до папки проекту
		<br><br>
		<img src="../img/n4.png" alt="Step 4" width="600" >

		<!-- ------------------------------------------------------ -->

		<h1>Перевірка роботи:</h1>

		<h2>1. В папці проекту створюємо файл index.php та записуємо в нього:</h2>
		<br>

		<h3>
			&lt;?php
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;phpinfo()
			<br><br>
		</h3>
		
		<h2>2. В браузері в адресний рядок вводимо: frontbacklabs.local/</h2>
		<br>

		<h2>3. В результаті на екрані з'явиться такі дані</h2>
		<br>
		<img src="../img/p1.png" alt="Right end" width="800">
		<br><br>

		<h2>Note!!! У випадку, коли ви не побачили такої інформації, потрібно перевірити всі попередні пункти або повторити все заново</h2>

	</div>
	
</body>
</html>