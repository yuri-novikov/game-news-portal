<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === "/journal/news" ? "active" : ""; ?>" href="/journal/news">Новости</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === "/journal/about" ? "active" : ""; ?>" href="/journal/about">О нас</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-3">
		<?php include 'views/' . $content_view; ?>
	</div>
</body>

</html>