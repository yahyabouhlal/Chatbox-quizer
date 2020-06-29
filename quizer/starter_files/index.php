<?php
include 'database.php';
?>

<? include 'add.php' ?>

<?php 

/*
 * Get the total number of questions 
 */

 $query = "SELECT * FROM questions";
 //get results
 $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
 
 $total = $result->num_rows;

?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title> Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1> Quizzer</h1>
		</div>
	</header>


	<main>
		<div class="container">
			<h2>Test Your PHP Knowledge</h2>
			<p>This is a multiple choice quiz to test your knowledge of PHP</p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total;?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5;?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; YOUCODE, PHP Quizzer
		</div>
	</footer>
</body>
</html>