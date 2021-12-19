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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab5</title>
	<link rel="icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon3.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lab5.css">
	<script src="../js/lab5.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.css">
	<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<h1 class="header__text">Лабораторна робота №5</h1>
	</header>

	<div class="content">

		<div class="sidebar">
		
 			<table>
				<tr>
					<td id="nav1" onclick="row1()">
						<a href="#"><div class="sidebar_row">Тема. Постановка задачі</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav2" onclick="row2()">
						<a href="#"><div class="sidebar_row">Динамічні елементи 3го пукту</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav3">
						<a href="lab5_gallery/photogallery.html"><div class="sidebar_row">Фотогалерея</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav4">
						<a href="lab5_gallery/photoslider.html"><div class="sidebar_row">Слайдер фотографій</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav5">
						<a href="lab5_gallery/videoslider.html"><div class="sidebar_row">Слайдер відео</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav6" onclick="row6()">
						<a href="#"><div class="sidebar_row">Кнопки соціальних мереж</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav7" onclick="row7()">
						<a href="#"><div class="sidebar_row">Інформери</div></a>
					</td>
				</tr>
				<tr>
					<td id="nav8" onclick="row8()">
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
				<h3>ВИКОРИСТАННЯ В СЦЕНАРІЯХ JAVASCRIPT БІБЛІОТЕК КРОС-БРАУЗЕРНИХ ІНТЕРФЕЙСІВ МЕТОДІВ DOM. БІБЛІОТЕКА JQUERY UI. ЗАСОБИ НАЛАГОДЖЕННЯ І ТЕСТУВАННЯ СЦЕНАРІЇВ JAVASCRIPT. 
				</h3><br>

				<h1>Мета:</h1>
				<h3>
					придбати практичні навички роботи jQuery UI, вміти додавати до сайту  динамічні елементи цієї бібіліотеки, плагін галереї UniteGallery, кнопки соціальних мереж, інформери та інше.
				</h3>
			</div>

			<div id="row2">

				<!-- ------------------------------------------------------------------------------- -->

				<h2>Accordion - набір елементів, що розгортаються/згортаються.</h2>

				<div class="panel">

					<div class="panel-heading">
						<a href="#"><i class="fa fa-shopping-cart"></i>Пункт 1</a>
					</div>

					<div class="panel-collapse">
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi architecto consequatur culpa cupiditate debitis delectus ex fugiat in ipsum iure, nemo, neque nobis placeat provident quas quidem ratione reiciendis repellat reprehenderit repudiandae rerum sequi ullam velit voluptatum? Neque, quos!?</p>
						</div>
					</div>
				</div>

				<div class="panel">

					<div class="panel-heading">
						<a href="#"><i class="fa fa-trophy"></i>Пункт 2</a>
					</div>

					<div class="panel-collapse">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus dolorum eius eos impedit ipsa ipsum labore minus, molestiae nemo nesciunt nulla, optio praesentium quod reprehenderit sit sunt tenetur voluptas:</p>
					</div>
				</div>

				<div class="panel">

					<div class="panel-heading">
						<a href="#"><i class="fa fa-server"></i>Пункт 3</a>
					</div>

					<div class="panel-collapse">
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet cum, debitis fugiat molestiae nisi, placeat provident quos ratione sunt tempore totam ullam velit. Consequuntur ex incidunt labore quae quos tempora, voluptatibus? Autem culpa dicta dolorum eaque error eveniet nam odio suscipit tenetur, voluptates! Ad atque maiores officiis quasi sequi!</p>
						</div>
					</div>
				</div>

				<script>
					$(document).ready(function () {

						$('.panel-heading').click(function () {
							$(this).toggleClass('in').next().slideToggle();
							$('.panel-heading').not(this).removeClass('in').next().slideUp();
				        });

				    });
				</script>

				<!-- ------------------------------------------------------------------------------- -->

				<script>
				$(function(){
					$('#slider').slider({
						min: 0,
						max: 100,
						value: 0,
						slide: function(event, ui){
							$('#val').val(ui.value);
						}
					});
				});
				</script>

				<br><h2>Slider - вибір числа за допомогою повзунка.</h2>	
				<div class="wrapper">
					<div id="slider"></div>
					<input type="text" id="val" value="">
				</div>

				<!-- ------------------------------------------------------------------------------- -->

				<br><h2>Datepicker - вибір дати з календаря.</h2>

				<div class="wrapper">
					<p>Date: <input type="text" id="datepicker"></p>
				</div>

				<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
				<link rel="stylesheet" href="/resources/demos/style.css">
				<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
				<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
				<script>
				  $( function() {
				    $( "#datepicker" ).datepicker();
				  } );
				</script>

<!-- ------------------------------------------------------------------------------- -->

<br><br><br>
<h2>Програмний код</h2>
<xmp>
<h2>Accordion - набір елементів, що розгортаються/згортаються.</h2>

<div class="panel">
	<div class="panel-heading">
		<a href="#"><i class="fa fa-server"></i>Пункт 1</a>
	</div>
	<div class="panel-collapse">
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>

<div class="panel">
	<div class="panel-heading">
		<a href="#"><i class="fa fa-server"></i>Пункт 2</a>
	</div>
	<div class="panel-collapse">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>
</div>

<div class="panel">
	<div class="panel-heading">
		<a href="#"><i class="fa fa-server"></i>Пункт 3</a>
	</div>
	<div class="panel-collapse">
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {

		$('.panel-heading').click(function () {
			$(this).toggleClass('in').next().slideToggle();
			$('.panel-heading').not(this).removeClass('in').next().slideUp();
        });

    });
</script>
					
</xmp>

<!-- ------------------------------------------------------------------------------- -->

<xmp>

<script>
	$(function(){
		$('#slider').slider({
			min: 0,
			max: 100,
			value: 0,
			slide: function(event, ui){
				$('#val').val(ui.value);
			}
		});
	});
</script>

<br><h2>Slider - вибір числа за допомогою повзунка.</h2>	
<div class="wrapper">
	<div id="slider"></div>
	<input type="text" id="val" value="">
</div>

</xmp>

<!-- ------------------------------------------------------------------------------- -->

<xmp>
<br><h2>Datepicker - вибір дати з календаря.</h2>

<div class="wrapper">
	<p>Date: <input type="text" id="datepicker"></p>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
</xmp>

			</div>	

			<div id="row3">
				<h2>Фотогалерея</h2>
				
			</div>

			<div id="row4">
				<h2>Слайдер фотографій</h2>

				
			</div>

			<div id="row5">
				<h2>Слайдер відео</h2>
				
			</div>

			<div id="row6">

				<h2>Кнопки соціальних мереж</h2>
				<br>

				<div class="rowItem">
			 		<div><a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fntuu.kpi%2F" class="fa fa-facebook"></a></div>
			 		<div><a href="https://www.youtube.com/channel/UCzc_TAfzPCecAJBHc8sEZ2Q" class="fa fa-youtube"></a></div>
			 		<div><a href="https://www.instagram.com/kpi.ua/" class="fa fa-instagram"></a></div>
			 		<div><a href="https://www.skype.com/uk/" class="fa fa-skype"></a></div>
			 		<div><a href="https://ua.linkedin.com/company/kpi.ua" class="fa fa-linkedin"></a></div>
			 		<div><a href="https://twitter.com/kpi_gaming" class="fa fa-twitter"></a></div>
			 		<div><a href="https://twitter.com/kpi_gaming" class="fa fa-pinterest"></a></div>
				</div>

				<br>
				<br>
				<br>
				<h2>Програмний код</h2>
<xmp>
<div class="rowItem">
	<div><a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fntuu.kpi%2F" class="fa fa-facebook"></a></div>
	<div><a href="https://www.youtube.com/channel/UCzc_TAfzPCecAJBHc8sEZ2Q" class="fa fa-youtube"></a></div>
	<div><a href="https://www.instagram.com/kpi.ua/" class="fa fa-instagram"></a></div>
	<div><a href="https://www.skype.com/uk/" class="fa fa-skype"></a></div>
	<div><a href="https://ua.linkedin.com/company/kpi.ua" class="fa fa-linkedin"></a></div>
	<div><a href="https://twitter.com/kpi_gaming" class="fa fa-twitter"></a></div>
	<div><a href="https://twitter.com/kpi_gaming" class="fa fa-pinterest"></a></div>
</div>
</xmp>
				
			</div>

			<div id="row7">
				<div class="columnItem">

						<h2>Погода в Києві</h2>
						<div class="item1">
						<div id="m-booked-vertical-one-prime-27610"> 
							<div class="weather-customize weather-booked-vertical-one-prime" style="width:250px;" >  <div class="booked-vertical-prime-in"> 
								<div class="booked-vertical-prime"> 
									<div class="bwop-city">Київ</div> 
									<div class="bwop-icon wm18 "></div> 
									<div class="booked-bwop-today"> 
										<div class="booked-bwop-today-temperature"> 
											<div class="booked-wzs-bwop-val"> 
												<div class="booked-bwop-number">
													<span class="plus">+</span>8</div> 
													<div class="booked-bwop-dergee"> 
														<div class="booked-wzs-bwop-dergee-val">&deg;</div> 
														<div class="booked-wzs-bwop-dergee-name">C</div> 
													</div> 
												</div> 
											</div> 
											<div class="booked-bwop-today-extreme"> 
												<div class="booked-bwop booked-pd-h">
													<span>Макс.:</span>
													<span class="plus">+</span>9
												</div> 
												<div class="booked-bwop booked-pd-l"><span>Мін.:</span><span class="plus">+</span>7
												</div> 
											</div> 
											</div> 
												<div class="bwop-state"> Дощ 
											</div> 
										</div> 
									</div> 
								</div> 
							</div>
						</div>

						<script type="text/javascript"> 
							var css_file=document.createElement("link"); 
							var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); 
							css_file.setAttribute("type","text/css"); 
							css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-prime-vertical-one.css?v=0.0.1'); 
							document.getElementsByTagName("head")[0].appendChild(css_file); 
							function setWidgetData_27610(data) { 
								if(typeof(data) != 'undefined' && data.results.length > 0) { 
										for(var i = 0; i < data.results.length; ++i) { 
										var objMainBlock = document.getElementById('m-booked-vertical-one-prime-27610'); 
									if(objMainBlock !== null) { 
										var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type);
										 objMainBlock.innerHTML = data.results[i].html_code; 
										if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } 
									else { alert('data=undefined||data.results is empty'); } } 
								var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18881;type=7;scode=124;ltid=3457;domid=966;anc_id=39041;countday=undefined;cmetric=1;wlangID=29;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=27610';
							var weatherBookedScript = document.createElement("script"); 
							weatherBookedScript.setAttribute("type", "text/javascript"); 
							weatherBookedScript.src = widgetSrc; 
							document.body.appendChild(weatherBookedScript) 
						</script>

						<h2>Курс валют</h2><br>
							<div class="item1">

								<div id="minfin-informer-m1Fn-region">Завантажуємо 
									<a href="https://minfin.com.ua/ua/currency/" target="_blank">курси валют</a>
								</div>

								<script>
									var iframe = '<ifra'+'me width="304" height="120" fram'+'eborder="0" src="https://informer.minfin.com.ua/ua/gen/region/0/?color=yellow" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:304px;height:120px;ove'+'rflow:hidden;"></iframe>';var cl = 'minfin-informer-m1Fn-region';
									document.getElementById(cl).innerHTML = iframe; 
								</script>

								<noscript><img src="https://informer.minfin.com.ua/gen/img.png" width="1" height="1" alt="minfin.com.ua: курси валют" title="Курс валют" border="0" /></noscript>
							</div>
						</div>

						<br>
						<h2>Час за Києвом</h2>
						<div class="item1">

						<script type="text/javascript"> 
						var css_file=document.createElement("link"); 
						css_file.setAttribute("rel","stylesheet"); 
						css_file.setAttribute("type","text/css"); 
						css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-ri-pr.css?v=0.0.1"); 
						document.getElementsByTagName("head")[0].appendChild(css_file); 
						</script> 
						<div id="tw_23_878124452">
							<div style="width:200px; height:px; margin: 0 auto;">
								<a href="https://hotelmix.com.ua/time/kiev-18881">Київ</a>
								<br/>
							</div>
						</div> 
						<script type="text/javascript"> 
							function setWidgetData_878124452(data){ 
								if(typeof(data) != 'undefined' && data.results.length > 0) { 

									for(var i = 0; i < data.results.length; ++i) { 
									var objMainBlock = ''; 
								var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } 
								var clock_timer_878124452 = -1; 
								widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=966;type=23;id=878124452;scode=124;city_id=18881;wlangid=29;mode=2;details=0;background=ffffff;border_color=3d4e9c;color=686868;add_background=ffffff;add_color=333333;head_color=ffffff;border=1;transparent=0"; 
								var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; 
								var wstrackId = ""; 
								if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } 
								var timeBookedScript = document.createElement("script"); 
								timeBookedScript.setAttribute("type", "text/javascript"); 
							timeBookedScript.src = widgetSrc; 
						document.body.appendChild(timeBookedScript); 
						</script>
					</div>


					<br>
					<br>
					<h2>Програмний код</h2>

<xmp>
<h2>Погода в Києві</h2>
<div class="item1">
<div id="m-booked-vertical-one-prime-27610"> 
	<div class="weather-customize weather-booked-vertical-one-prime">  <div class="booked-vertical-prime-in"> 
		<div class="booked-vertical-prime"> 
			<div class="bwop-city">Київ</div> 
			<div class="bwop-icon wm18 "></div> 
			<div class="booked-bwop-today"> 
				<div class="booked-bwop-today-temperature"> 
					<div class="booked-wzs-bwop-val"> 
						<div class="booked-bwop-number">
							<span class="plus">+</span>8</div> 
							<div class="booked-bwop-dergee"> 
								<div class="booked-wzs-bwop-dergee-val">&deg;</div> 
								<div class="booked-wzs-bwop-dergee-name">C</div> 
							</div> 
						</div> 
					</div> 
					<div class="booked-bwop-today-extreme"> 
						<div class="booked-bwop booked-pd-h">
							<span>Макс.:</span>
							<span class="plus">+</span>9
						</div> 
						<div class="booked-bwop booked-pd-l"><span>Мін.:</span><span class="plus">+</span>7
						</div> 
					</div> 
					</div> 
						<div class="bwop-state"> Дощ 
					</div> 
				</div> 
			</div> 
		</div> 
	</div>
</div>

<script type="text/javascript"> 
	var css_file=document.createElement("link"); 
	var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); 
	css_file.setAttribute("type","text/css"); 
	css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-prime-vertical-one.css?v=0.0.1'); 
	document.getElementsByTagName("head")[0].appendChild(css_file); 
	function setWidgetData_27610(data) { 
		if(typeof(data) != 'undefined' && data.results.length > 0) { 
				for(var i = 0; i < data.results.length; ++i) { 
				var objMainBlock = document.getElementById('m-booked-vertical-one-prime-27610'); 
			if(objMainBlock !== null) { 
				var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type);
				 objMainBlock.innerHTML = data.results[i].html_code; 
				if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } 
			else { alert('data=undefined||data.results is empty'); } } 
		var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info";
	weatherBookedScript.setAttribute("type", "text/javascript"); 
	weatherBookedScript.src = widgetSrc; 
	document.body.appendChild(weatherBookedScript) 
</script>

<h2>Курс валют</h2><br>
	<div class="item1">
		<div id="minfin-informer-m1Fn-region">Завантажуємо 
			<a href="https://minfin.com.ua/ua/currency/" target="_blank">курси валют</a>
		</div>
		<script>
			var iframe = '<ifra'+'me width="304" height="120" fram'+'eborder="0"';
			document.getElementById(cl).innerHTML = iframe; 
		</script>
		<noscript><img src="https://informer.minfin.com.ua/gen/img.png" title="Курс валют" border="0" /></noscript>
	</div>
</div>

<br>
<h2>Час за Києвом</h2>
<div class="item1">

<script type="text/javascript"> 
var css_file=document.createElement("link"); 
css_file.setAttribute("rel","stylesheet"); 
css_file.setAttribute("type","text/css"); 
css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-ri-pr.css?v=0.0.1"); 
document.getElementsByTagName("head")[0].appendChild(css_file); 
</script> 
<div id="tw_23_878124452">
	<div style="width:200px; height:px; margin: 0 auto;">
		<a href="https://hotelmix.com.ua/time/kiev-18881">Київ</a>
		<br/>
	</div>
</div> 
<script type="text/javascript"> 
	function setWidgetData_878124452(data){ 
		if(typeof(data) != 'undefined' && data.results.length > 0) { 

			for(var i = 0; i < data.results.length; ++i) { 
			var objMainBlock = ''; 
			var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id);
			var clock_timer_878124452 = -1; 
			widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=333;head_color=ffffff"; 
			var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; 
			var wstrackId = ""; 
			if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } 
			var timeBookedScript = document.createElement("script"); 
			timeBookedScript.setAttribute("type", "text/javascript"); 
			timeBookedScript.src = widgetSrc; 
			document.body.appendChild(timeBookedScript); 
</script>
</div>

</xmp>

			</div>

			<div id="row8">

				<h1>Висновки:</h1><br>
				<p>Під час виконання лабораторної роботи нами ми засвоїли базові знання для робити з каскадними таблицями стилів(CSS). Навчилися працювати з селекторами, ідентифікаторами, списками, різноманітними властивостями кольору і фону, зовнішними та внутрішними  відступами, плаваючими елементами, оформленням текстових елементів. Також нами створено шаблон звітного HTML-документа для Лабораторної роботи №2 де відображені результати роботи нашої роботи.

			</div>
		</div>
	</div>
</body>
</html>