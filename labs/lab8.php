<?php 

	include "../configs/db.php";

	if ( isset($_POST["name"]) && isset($_POST["genre"]) && isset($_POST["year"]) && isset($_POST["author"])  && isset($_POST["amount"]) && isset($_POST["description"])) {

        if (isset($_POST["name"]) != "" && $_POST["genre"] != "" && $_POST["year"] != "" && $_POST["author"] != "" && $_POST["amount"] && $_POST["description"]) {

            $sql_add_book = "INSERT INTO books (name, genre, year, author, amount, description) VALUES ('" .$_POST["name"]. "', '" .$_POST["genre"]. "', '" .$_POST["year"].  "', '" .$_POST["author"]. "', '" .$_POST["amount"].  "', '" .$_POST["description"]. "')";

            $text = "Назва книги:" .$_POST["name"]. "\nЖанр: " .$_POST["genre"]. "\nРік: " .$_POST["year"].  "\nАвтор: " .$_POST["author"]. "\nЦіна: " .$_POST["amount"].  "\nОпис: " .$_POST["description"]. "\n\n";

            $filename = "lab8_conf/file.txt";
            $file = fopen($filename, "a");
            $test = fwrite($file, $text);
            fclose($file);

            if (mysqli_query($connect, $sql_add_book)) {
                header("Location: http://frontbacklabs.local/Fromt&Back_Labs/labs/lab8.php");
                echo "<script> alert(\"New film added successfully!\"); </script>";
            }

        } else {
            header("Location: http://frontbacklabs.local/Fromt&Back_Labs/labs/lab8.php");
            echo "<script> alert(\"Enter a righr data!\"); </script>";
        }

    } 

    // ------------------------------------------------------

	$sql_books = "SELECT * FROM books";

	$result_books = mysqli_query($connect, $sql_books);

	$numOfBooks = mysqli_num_rows($result_books);

	$search = "";

	if (isset($_POST["search"])) {

		$search = $_POST["search"];

		$sql3 = "SELECT * FROM `books` WHERE name LIKE '%{$search}%'";

		$result_search = mysqli_query($connect, $sql3);

		$numOfSearchResults = mysqli_num_rows($result_search);
	}

    //----------------------------------------------------------------


	$autarisation = null;

	if ( isset($_COOKIE["user_id"])) {
		$autarisation = $_COOKIE["user_id"];
	}

	if ($autarisation === null) {
		header("Location: http://frontbacklabs.local/Fromt&Back_Labs/login.php");
	}


	$sql_user = "SELECT * FROM users WHERE id = ".$autarisation;

	$result_user = mysqli_query($connect, $sql_user);

	$producer_user = mysqli_fetch_assoc($result_user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab8</title>
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
		    <li><a class="menu__item" href="#">Лабораторна робота №7</a></li>
		    <li><a class="menu__item" href="lab8.php">Лабораторна робота №8</a></li>
		    <li><a class="menu__item" href="lab9.php">Лабораторна робота №9</a></li>
		    <li><a class="menu__item" href="../exit.php">Вихід</a></li>
		  </ul>
	</div>

	<div class="content">

		<h1>Лабораторна робота №8</h1><br>
		<h2>Тема: ІНТЕРФЕЙСИ ВЗАЄМОДІЇ WEB-ЗАСТОСУВАНЬ З СИСТЕМОЮ КЕРУВАННЯ БАЗ ДАНИХ (СКБД). SQL-ЗАПИТИ У PHP-СЦЕНАРІЯХ. ІНТЕРФЕЙСИ WEB-ЗАСТОСУВАНЬ з СКБД. ВИКОРИСТАННЯ СЕСІЙ І COOKIES  В СЦЕНАРІЯХ АВТОРИЗАЦІЇ. РОЗРОБКА СЦЕНАРІЇВ ОБРОБКИ ДАНИХ З ФАЙЛІВ.</h2><br>

		<h2>Мета: придбати практичні навички роботи взаємодії WEB- застосувань з СКБД, використання сесій і cookies в сценаріях авторизації, розробки сценаріїв обробки даних з файлів.</h2>
		<h3>
		</h3>


		<style type="text/css">

		    #lang {
		      margin-top: 10px;
		    }

		    .language {
		     	margin-bottom: 50px;
		    }

		</style>


		  <br><br><h3>Завдання: Реалізувати вибір мови мови</h3><br>
		  <div class="language">
		    <a href="lab8.php?lang=ukr"><img src="../img/ukr.png", width = "50", height = "30"></a>
		    <a href="lab8.php?lang=rus"><img src="../img/rus.png", width = "50", height = "30"></a>
		    <a href="lab8.php?lang=eng"><img src="../img/eng.png", width = "50", height = "30"></a>
		    
		    <?php
		      if (isset($_GET['lang'])) {
		        $lang = $_GET['lang'];
		        
		        if ($lang=="ukr") {
		          $text="Вибрана українська мова";
		        } else if ($lang=="rus") {
		          $text="Выбран русский язык";
		        } else if ($lang="eng") {
		          $text="English language is choosen";
		        }
		        echo "<h3 id=\"lang\">".$text."</h3>";
		      }
		    ?>
		  </div>

		<h3>Завдання: Вивід даних юзера</h3><br>
		<form class="film_post" action="POST">
			Current user nickname: <br>
			<p><input type="text" name="name" value="<?php echo $producer_user['name']; ?>"></p><br>
			Current user email: <br>
			<p><input type="email" name="login" value="<?php echo $producer_user['email']; ?>"></p><br>
			<!-- <p id="btn">
				<button type="submit">Update credantials</button>
			</p> -->
		</form>

		<br><h3>Завдання: Внесення даних до БД</h3><br>
		<form class="film_post" method="POST">

			<h2>Add new book:</h2><br>

			<p id="film_name">
				Name: 
				<input id="name_book" type="text" name="name">
			</p>
			<br>

			<p id="film_category">
				Genre: 
				<input id="genre_book" type="dropdown" name="genre">
			</p>
			<br>

			<p id="film_author">
				Author: 
				<input id="author_book" type="text" name="author">
			</p>
			<br>

			<p id="film_year">
				Year: 
				<input id="year_book" type="number" name="year">
			</p>
			<br>

			<p id="film_length">
				Amount: 
				<input id="amount_book" type="times" name="amount">
			</p>
			<br>

			<p id="film_description">
				Description: <br>
				<textarea id="description_book" name="description" id="description" cols="30" rows="10"></textarea>
			</p>
			<br>
			
			<p id="btn">
				<button type="submit">Add book</button>
			</p>

		</form>

		<br><br>

		<div id="list">
			<?php if ($search == "") { ?>
				<h2>Book count - <?php echo $numOfBooks ?></h2><br>
				<form action="" method="post">
					<input type="text" name="search">
					<button type="submit">Search</button>
				</form><br>
					<?php 
						$i = 0;
						while($i < $numOfBooks){
							$book = mysqli_fetch_assoc($result_books);?>
						<div class="row">
							<h2><?php echo $book["name"] ?></h2>
							<p><strong>Категорія: </strong><?php echo $book["genre"] ?></p>
							<p><strong>Автор: </strong><?php echo $book["author"] ?>грн</p>
							<p><strong>Рік: </strong><?php echo $book["year"] ?></p>
							<p><strong>Ціна: </strong><?php echo $book["amount"] ?>грн</p>
							<p><strong>Опис: </strong><?php echo $book["description"] ?></p>
						</div><br>
					<?php 
							$i++;	
						}
					 ?>
			<?php  } else { ?>
				<h2>Search results - <?php echo $numOfSearchResults ?></h2><br>
				<form action="" method="post">
					<input type="text" name="search">
					<button type="submit">Search</button>
				</form><br>
					<?php 
						$j = 0;
						while($j < $numOfSearchResults){
							$searches = mysqli_fetch_assoc($result_search);?>
							<div class="row">
								<h2><?php echo $searches["name"] ?></h2>
								<p><strong>Жанр: </strong><?php echo $searches["genre"] ?></p>
								<p><strong>Автор: </strong><?php echo $searches["author"] ?></p>
								<p><strong>Рік: </strong><?php echo $searches["year"] ?></p>
								<p><strong>Ціна: </strong><?php echo $searches["amount"] ?>$</p>
								<p><strong>Опис: </strong><?php echo $searches["description"] ?></p>
							</div>
					<?php 
							$j++;	
						}	
			} ?>

		</div>

		<h3>Вміст файлу:</h3><br>
		<?php 

		$fname = 'lab8_conf/file.txt';

		if (file_exists($fname)) {

		    if (filesize($fname) == 0){

		    	echo "[Файл пустий]";
			} else {
				$lines = file($fname);
			    foreach($lines as $single_line)
			        echo $single_line . "<br />\n";
			}

		} else {

		    echo "[Файла не знайдено]";
		}
			
		?>

		<br>
		<br>
		<div class="end"><strong>Висновок:</strong> Під час виконання лабораторної роботи нами були засвоєні практичні навички роботи взаємодії WEB- застосувань з СКБД, використання сесій і cookies в сценаріях авторизації, розробки сценаріїв обробки даних з файлів. Покращили навички використання декларативної мови програмування для взаємодії користувача з базами даних.</div>

		<h1>Код програми</h1>

		<img src="lab8_conf/img1.png" alt="1" width="1000">
		<img src="lab8_conf/img2.png" alt="2" width="1000">
		<img src="lab8_conf/img3.png" alt="3" width="1000">
		<img src="lab8_conf/img4.png" alt="4" width="1000">
		<img src="lab8_conf/img5.png" alt="5" width="1000">

		<h1>Модель БД</h1>

		<img src="lab8_conf/bd.png" alt="5" width="1000">

	</div>
	
</body>
</html>