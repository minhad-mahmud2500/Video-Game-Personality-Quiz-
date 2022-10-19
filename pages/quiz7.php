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
		updateScores($_GET['choice'], $_SESSION['INDEX'], $_SESSION['choices6']);
	
	$_SESSION['INDEX'] = 7;
	
	// $_SESSION['choices7'] = array(
	// 'A' => array( 10,   0,  10,   0,   0,   0,   0,   0,   0,  10),
	// 'B' => array(  0,  10,   0,  10,  10,  10,  10,  10,  10,   0)
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
	<h1> Are you a picky eater? </h1>
	<form action="./quiz8.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Yes :)
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> No (:
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