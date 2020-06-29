<?php include 'database.php' ?>
<?php session_start(); ?>

<?php
//PHP LOGIC //la qui intervient model vue controller
//SET question number

$number = (int) $_GET['n'];

/* 
*  Get the question
*/

$query = "SELECT * FROM `questions` WHERE question_id = $number";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);
$question = $result->fetch_assoc(); //Associative array to use it after 

/* 
*  Get the choices
*/

$query = "SELECT * FROM `choice` WHERE question_id = $number";
//get results
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__); //Associative array to use it after 															

/*															
* 																
* geting total question															
*																
*																 
*/

$query = "SELECT * FROM `questions`";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;



?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $question['question_id'] ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['Text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">

					<?php while ($row = $choices->fetch_assoc()) : ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id'] ?>" /><?php echo $row['text'] ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2014, PHP Quizzer
		</div>
	</footer>
</body>

</html>