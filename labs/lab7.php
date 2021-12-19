<?php
	// БД -------------------------------------------------------------------------------
	include "../configs/db.php";

	// Якщо створили фільм зі всіма полями - зберікати в БД -----------------------------

	if ( isset($_POST["name"]) && isset($_POST["category"]) && isset($_POST["producer"]) && isset($_POST["year"]) && isset($_POST["amount"]) && isset($_POST["description"])) {

		if (isset($_POST["name"]) != "" && $_POST["category"] != "" && $_POST["producer"] != "" && $_POST["year"] && $_POST["amount"] && $_POST["description"]) {

			// Додаємо режесера в БД і отримуємо його id
			$sql_add_producer = "INSERT INTO `producers` (name) VALUES ('" .$_POST["producer"]. "')";
			mysqli_query($connect, $sql_add_producer);

			$sql_last_producer = "SELECT * FROM producers ORDER BY ID DESC LIMIT 1";
			$result_last_producer = mysqli_query($connect, $sql_last_producer);
			$producer_last = mysqli_fetch_assoc($result_last_producer);

			// Додаємо фільм в БД
			$sql_add_film = "INSERT INTO films (name, category, producer_id, year, amount, description) VALUES ('" .$_POST["name"]. "', '" .$_POST["category"]. "', '" .$producer_last['id']. "', '" .$_POST["year"].  "', '" .$_POST["amount"].  "', '" .$_POST["description"]. "')";

			if (mysqli_query($connect, $sql_add_film)) {
				header("Location: http://frontbacklabs.local/Fromt&Back_Labs/labs/lab7.php");
				echo "<script> alert(\"New film added successfully!\"); </script>";
			}

		} else {
			header("Location: http://frontbacklabs.local/Fromt&Back_Labs/labs/lab7.php");
			echo "<script> alert(\"Enter a righr data!\"); </script>";
		}

	} 

	// Отримуємо всі фільми з БД -----------------------------------------------------

	$sql_film = "SELECT * FROM films";

	// Виконати sql запрос в БД.
	$result_film = mysqli_query($connect, $sql_film);

	// Кількість отриманих результатів.
	$numOfFilms = mysqli_num_rows($result_film);

	// Отримуємо всіх режесерів з БД -------------------------------------------------

	$sql_producers = "SELECT * FROM producers";
	$result_producers = mysqli_query($connect, $sql_producers);

	// Якщо є дані для пошука - фільтруємо фільми ------------------------------------

	$search = "";

	if (isset($_POST["search"])) {

		$search = $_POST["search"];

		$sql3 = "SELECT * FROM `films` WHERE name LIKE '%{$search}%'";

		$result_search = mysqli_query($connect, $sql3);

		$numOfSearchResults = mysqli_num_rows($result_search);
	}

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
	<title>Lab7</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab7.css">
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

		<h1>Лабораторна робота №7</h1><br>
		<h2>Тема: Взаємодія WEB-застосування з системою керування базами даних (СКБД). Обробка результатів SQL-запитів у PHP-сценарії.</h2><br>

		<h2>Мета: придбати практичні навички підключення до СКБД, вибора бази даних, виконання запиту, отримання результатів, відключення від СКБД.</h2>
		<h3>
		</h3>

		<h1>Варіант 4</h1>
		<h3>Завдання: Реалізувати БД фільмотеки</h3><br><br>

		<form class="film_post" method="POST">

			<h2>Add new film:</h2><br>

			<p id="film_name">
				Name: 
				<input type="text" name="name">
			</p>
			<br>

			<p id="film_category">
				Category: 
				<input type="text" name="category">
			</p>
			<br>

			<p id="film_author">
				Author: 
				<input type="text" name="producer">
			</p>
			<br>

			<p id="film_year">
				Year: 
				<input type="n" name="year">
			</p>
			<br>

			<p id="film_length">
				Amount: 
				<input type="times" name="amount">
			</p>
			<br>

			<p id="film_description">
				Description: <br>
				<textarea name="description" id="description" cols="30" rows="10"></textarea>
			</p>
			<br>
			
			<p id="btn">
				<button type="submit">Add new film</button>
			</p>

		</form>

		<br><br>

		<div id="list">

			<?php if ($search == "") { ?>
				<h2>Films count - <?php echo $numOfFilms ?></h2><br>

				<form action="" method="post">
					<input type="text" name="search">
					<button type="submit">Search</button>
				</form>
				<br>

				<ul>
					<?php 
						$i = 0;
						while($i < $numOfFilms){
							$films = mysqli_fetch_assoc($result_film);
							$producer = mysqli_fetch_assoc($result_producers);
					?>
							<li>
								<h2><?php echo $films["name"] ?></h2>
								<p><strong>Категорія: </strong><?php echo $films["category"] ?></p>
								<p><strong>Режесер: </strong>
									<?php 
										echo $producer["name"];
									?>
								</p>
								<p><strong>Рік: </strong><?php echo $films["year"] ?></p>
								<p><strong>Касовий збір: </strong><?php echo $films["amount"] ?>$</p>
								<p><strong>Опис: </strong><?php echo $films["description"] ?></p>
							</li>
							<br>
					<?php 
							$i++;	
						}
					 ?>
				</ul>

			<?php  } else { ?>

				<h2>Search results - <?php echo $numOfSearchResults ?></h2><br>

				<form action="" method="post">
					<input type="text" name="search">
					<button type="submit">Search</button>
				</form>
				<br>

				<ul>
					<?php 

						$j = 0;

						while($j < $numOfSearchResults){

							$searches = mysqli_fetch_assoc($result_search);
							$producer = mysqli_fetch_assoc($result_producers);
					?>
							<li>
								<h2><?php echo $searches["name"] ?></h2>
								<p><strong>Категорія: </strong><?php echo $searches["category"] ?></p>
								<p><strong>Режесер: </strong>
									<?php 
										echo $producer["name"];
									?>
								</p>
								<p><strong>Рік: </strong><?php echo $searches["year"] ?></p>
								<p><strong>Касовий збір: </strong><?php echo $searches["amount"] ?>$</p>
								<p><strong>Опис: </strong><?php echo $searches["description"] ?></p>
							</li>

					<?php 
							$j++;	
						}
					?>

				</ul>

			<?php } ?>

		</div>

		<h1>Код програми</h1>

		<img src="lab7_variants/img/v4_1.png" alt="1" width="1000">
		<img src="lab7_variants/img/v4_2.png" alt="2" width="1000">
		<img src="lab7_variants/img/v4_3.png" alt="3" width="1000">
		<img src="lab7_variants/img/v4_4.png" alt="4" width="1000">

	</div>


</body>
</html>