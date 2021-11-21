<html>
	<head>
		<link rel="stylesheet" href="style/main.css" />
		<title>Мой простой сайт</title>	
	</head>
	<body>
		<div id="header">
			<div id="menu">
				<a href="index.php">Главная</a>
				<a href="index.php?view=context">Основное</a>
				<a href="index.php?view=about">О сайте</a>
			</div>
		</div>
		<div id="content">
			<?php 
				require_once 'controller/controller.php';
			?>
		</div>
	</body>
</html>