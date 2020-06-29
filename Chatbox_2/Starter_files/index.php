<?php

include 'database.php';
$sql = "SELECT * FROM shouts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8" />
  		<title>CHATBOX</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>SHOUT IT!</h1>
			</header>
			<div id="shouts">
			<ul>
			<li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to? </li>
			<li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to? </li>
			  <?php
				  while($row = $result->fetch_assoc()): ?>
              <li class="shout"><span><?php echo $row['time']; ?> --- </span><strong><?php echo $row['user']; ?>:</strong> <?php echo $row['message']; ?> </li>
			 <?php endwhile; ?>
			 </ul>
				
			</div>
			<div id="input">
				<form method="post" action="process.php">
				<?php if(isset($_GET["error"])):?>
                  <div class="error"><?php echo $_GET['error'];?> </div>
				<?php endif;?>
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Throw it" />
				</form>
			</div>
		</div>
	</body>
</html>