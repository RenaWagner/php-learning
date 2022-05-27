<?php 
if(isset($_GET['ID'])){
$servername = "localhost:8889";
$username = "exercise_user2";
$password = "ezFz_cnb1(*aeKV.";
$database = "exercise_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$ID = mysqli_real_escape_string($conn, $_GET['ID']);

$sql = "SELECT articles.title, images.path,articles.uuid FROM articles LEFT JOIN images ON articles.headerImage_uuid=images.uuid WHERE articles.id=$ID" ;
$result = mysqli_query($conn, $sql);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

$articleUuid =$articles[0]['uuid']; 
$sqlParagraph = "SELECT * FROM paragraphs LEFT JOIN images ON paragraphs.image_uuid=images.uuid WHERE paragraphs.article_id='$articleUuid'" ;
$resultParagraph = mysqli_query($conn, $sqlParagraph);
$paragraphs = mysqli_fetch_all($resultParagraph, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css" type="text/css">
<title><?php echo $article['title'] ?></title>
</head>
<body>
<?php 
foreach($articles as $article => $value) {
  $title = $value['title'];
  $headerImageUrl =  $value['path'];
  echo "<h1>$title</h1>";
  if ($headerImageUrl){
    echo "<img src='$headerImageUrl' alt='headerImage' class='headerImage'/>";
  }
}

foreach($paragraphs as $paragraph => $value){
  $title = $value['title'];
   $text = $value['text'];
  $paragraphImageUrl =  $value['path'];
  echo "<h2>$title</h2>";
  echo "<p>$text</p>";
   if ($paragraphImageUrl){
    echo "<img src='$paragraphImageUrl' alt='paragraphImageUrl' class='headerImage'/>";
  }
}
?>  



</body>
</html>