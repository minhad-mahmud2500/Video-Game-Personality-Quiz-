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
		updateScores($_GET['choice'], 5, $_SESSION['choices4']);
	
	// $_SESSION['choices5'] = array(
	// 'A' => array( 10,   0,  10,  10,  10,   0,  10,   0,  10,  10),
	// 'B' => array( 10,   0,  10,   0,  10,  10,   0,  10,  10,   0),
	// 'C' => array(  0,  10,   0,  10,   0,  10,  10,   0,   0,   0),
	// 'D' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
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
	<h1> What's most important to you? </h1>
	<form action="./quiz6.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Being the best
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Your friends
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Your possessions
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Trying new things
			</label><br><br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	</div>
	
	<?php
		insertFooter();
		// print_r($_SESSION);
	?>
</body>
</html>