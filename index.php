<?php 

include "database.php";
$movies = getMoviesList();
var_dump($movies);


?>


<!DOCTYPE html>
<html>
<head>
	<title>SQL Intro</title>
	<meta charset="utf-8">
	<meta name="description" content="between 150 and 160 characters ">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>


<?php 

foreach ($movies as $movies) {
	echo '<li>'.$movies[0].'-'.$movies[1].'</li>';
}




?>
 <h1>Movies list</h1>


<h2>you are awesome </h2>

<h3>Don't loose it </h3>

<h4>you gonna love it </h4>

<h5>yo bro !!!!</h5>


<h6>Play it cool !!!</h6>


</body>
</html>