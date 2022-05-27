<?php 
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;

if ($_POST)
{
  $servername = "localhost:8889";
  $username = "exercise_user2";
  $password = "ezFz_cnb1(*aeKV.";
  $database = "exercise_data";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Prevent SQL injection
 $title = mysqli_real_escape_string($conn,  $_POST["title"]);
 $text = mysqli_real_escape_string($conn,  $_POST["text"]);
$articleUuid = Uuid::uuid4();

$sql="INSERT INTO articles (uuid, title, type) VALUES ('$articleUuid', '$title', 'article')";

 if (mysqli_query($conn, $sql)) {
  $sqlParagraph = "INSERT INTO paragraphs (article_id, text) VALUES ('$articleUuid', '$text')";
   if (mysqli_query($conn, $sqlParagraph)) {
     echo "New record created successfully";
     header('Location: index.php');
    } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css" type="text/css">
<title>Article form</title>
</head>
<body>
<h1>Submit your article </h1>
<form method="post" > 
Title: <input type="text" name="title"><br>
Text: <textarea name="text"></textarea><br>
<input type="submit">
</form>



</body>
</html>