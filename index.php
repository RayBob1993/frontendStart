<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="theme-color" content="#fff">

		<title>Главная</title>
		
		<link rel="stylesheet" href="app/css/appUI.css">
		<link rel="stylesheet" href="app/css/app.css">
		<link rel="stylesheet" href="app/css/responsive.css">

		<link rel="shortcut icon" href="img/ico/favicon.ico">
	</head>
	<body>
		<?
			// Шапка
			include_once('include/header.php');
		?>

		<!-- Основа -->
		<main class="main">
			<!-- Колонка слева -->
			<section class="sidebarLeft">
				<!-- Меню слева -->
				<nav class="leftMenu">
					<ul class="list level1">
						<li class="active"><a href="">Главная</a></li>
						<li><a href="">О компании</a></li>
					</ul>
				</nav>
			</section>
			
			<!-- Контент блок -->
			<section class="content">
				<!-- Путь по сайту -->
				<nav class="path">
					<ul class="list listFlex">
						<li><a href="">Главная</a></li>
						<li class="active"><a href="">О компании</a></li>
					</ul>
				</nav>

				<!-- Заголовок страницы -->
				<h1 class="pageTitle"></h1>
			</section>
		</main>

		<? 
			// Подвал
			include_once('include/footer.php');
		?>
	
		<script src="app/js/lib/jquery-2.2.4.min.js"></script>

		<script src="app/js/plugins/bootstrap.min.js"></script>
		<script src="app/js/plugins/jquery.slick.min.js"></script>
		<script src="app/js/plugins/jquery.maskedinput.min.js"></script>
		<script src="app/js/plugins/jquery.fancybox.min.js"></script>

		<script src="app/js/app.js"></script>
		<script src="app/js/main.js"></script>
	</body>
</html>