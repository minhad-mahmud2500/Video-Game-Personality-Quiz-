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
		updateScores($_GET['choice'], $_SESSION['INDEX'], $_SESSION['choices9']);
	
	$_SESSION['INDEX'] = 10;
	
	// $_SESSION['choices10'] = array(
	// 'A' => array(  5,  10,  10,  10,   5,   5,  10,  10,  10,   0),
	// 'B' => array( 10,   0,   0,   0,  10,  10,   0,   0,   0,  10),
	// 'C' => array(  0,   0,   0,   0,   0,   0,   0,   0,   0,   0)
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
	<h1> Real talk: Single-player?? Or multi player? </h1>
	<form action="./quiz11.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Single-player
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Multi-player
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Other
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