<?php include 'database.php'; ?>

<?php
// Total questions
 $query = "SELECT * FROM questions";
 //Results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>QUIZZ PHP!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>QUIZZ !</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Knowledge about PHP.</h2>
			<p>Multiple choice quizz about PHP.</p>
			<ul>
				<li><strong>Number of questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>One Choice</li>
				<li><strong>Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz!</a><br/><hr>
			<a href="add.php" class="start">Add Questions!</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2019, QUIZZ - PHP
		</div>
	</footer>
</body>
</html>