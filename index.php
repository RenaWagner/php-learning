<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css" type="text/css">
<title>Penguins</title>
</head>
<body>
<?php 

// require 'vendor/autoload.php';

// use GuzzleHttp\Client;

// $client = new Client();
// $response = $client->request('GET', 'http://localhost:8001/assets/json/home.json');
// $data = $response->getBody()->getContents();
// $parsed_json = json_decode($data, true);

// $title = $parsed_json['title'];
// $titleArray = explode(":", $title);
// echo "<h1>$titleArray[0]:</h1>";
// echo "<br/>";
// echo "<h1 class='bottom-margin'>$titleArray[1]</h1>";

// $headerImageUrl = $parsed_json['headerImage'];
// echo "<img src='$headerImageUrl' alt='headerImage' class='headerImage'/>";

// $paragraphs = $parsed_json['paragraphs'];
// foreach($paragraphs as $value) {
//   $title = $value['title'];
//   $text = $value['text'];
//   echo "<h2>$title</h2>";
//   echo "<p>$text</p>";
//   $image = $value['image'];
//   echo "<img src='$image' alt='$title' class='image'/>";
// }

// array_walk($paragraphs, function(&$key) { 
//   $title = $key['title'];
//   $text = $key['text'];
//   echo "<h2>$title</h2>";
//   echo "<p>$text</p>";
//   $image = $key['image'];
//   echo "<img src=$image alt=$text.' image' class='image'/>";
// });

// array_map(function(&$key) { 
//   $title = $key['title'];
//   $text = $key['text'];
//   echo "<h2>$title</h2>";
//   echo "<p>$text</p>";
//   $image = $key['image'];
//   echo "<img src=$image alt=$text.' image' class='image'/>";
// },$paragraphs);
?> 
</body>
</html>
