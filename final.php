<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>QUIZZ PHP</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>QUIZZ PHP</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Success!</h2>
				<p>Gratulations!</p>
				<p>Final Score: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Again!?</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2019, QUIZZ - PHP
		</div>
	</footer>
</body>
</html>
<?php session_destroy(); ?>