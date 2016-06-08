

<?php 

$dbc = new mysqli('localhost','root','','amit_db');

function getMoviesList(){
	
	global $dbc;

	$sql = "SELECT id, title, description, duration, rating, release_date FROM movies";

	 $result = $dbc->query($sql);
	 var_dump($result);

	 $allMovies = $result->fetch_all();

	 return $allMovies;

	// $movieArray = [];

	// while( $allMovies = $result->fetch_assoc()){
	// 	$movieArray = $allMovies;

	// }

	//  var_dump($movieArray);


};


?>