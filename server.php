<?php 
$servername = "localhost:8889";
$username = "exercise_user2";
$password = "ezFz_cnb1(*aeKV.";
$database = "exercise_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn){
echo "Connection error: " . mysqli_conect_erro();
}

//write query for all articles
$sql = 'SELECT title FROM articles';

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$articlesTitles = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
?>