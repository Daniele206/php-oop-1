<?php

  require_once __DIR__ . '/modell/movie.php';

  $film1 = new Movie('film1' , 'autore1', 'attore1');
  $film2 = new Movie('film2' , 'autore2', 'attore2');

  var_dump($film1);
  var_dump($film1->getNameAndAutor());
  
  var_dump($film2);
  var_dump($film2->getNameAndAutor());

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-1</title>
</head>
<body>
  <h1>PHP-OOP-1</h1>
</body>
</html>