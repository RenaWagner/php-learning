<?php 
$servername = "localhost:8889";
$username = "exercise_user2";
$password = "ezFz_cnb1(*aeKV.";
$database = "exercise_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn){
echo "Connection error: " . mysqli_conect_erro();
}
?>