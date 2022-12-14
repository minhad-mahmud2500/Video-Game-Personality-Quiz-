<!-- 
    Web Progamming Spring 2022
    Author: Minhad Mahmud 
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	initializeArrays();

	if (isset($_GET['choice']))
		updateScores($_GET['choice'], $_SESSION['INDEX'], $_SESSION['choices14']);
	
	$_SESSION['INDEX'] = 15;
	
	// $_SESSION['choices15'] = array(
	// 'A' => array( 10,   0,  10,   0,   0,  10,   0,   0,   0,   0),
	// 'B' => array(  0,   0,   0,   0,   0,  10,  10,   0,  10,   0),
	// 'C' => array(  0,   0,   0,   0,   0,  10,   0,  10,   0,   0),
	// 'D' => array(  0,   0,   0,  10,   0,  10,   0,   0,   0,  10),
	// 'E' => array(  0,  10,   0,  10,   0,   0,  10,   0,   0,   0)
	// );
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Personality Quiz</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
	<?php 
		// checkQuizProgress($_SESSION['INDEX']);
		insertHeader();
	?>
	
	<div class="quiz">
	<h1> Last question! What is your favorite pet? </h1>
	<form action="./quizend.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Cat
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Dog
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Rabbit
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Bird
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Fish
			</label><br><br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	</div>
	
	<?php
		// print_r($_SESSION);
		insertFooter();
	?>
</body>
</html>