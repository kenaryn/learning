<?php
declare(strict_types=1);
$movies = [['Title' => 'The Shawhank Redemption', 'Director' => 'Frank Darabont', 'Year' => 1994, 'Notation' => 9.2],
          ['Title' => 'The Godfather', 'Director' => 'Francis Ford Coppola', 'Year' => 1972, 'Notation' => 9.1],
          ['Title' => 'The Dark Knight', 'Director' => 'Christopher Nolan', 'Year' => 2008, 'Notation' => 9.0], 
          ['Title' => 'The Lord of the Rings: The Return of the King', 'Director' => 'Peter Jackson', 'Year' => 2003, 'Notation' => 8.9],
          ['Title' => 'Pulp Fiction', 'Director' => 'Quentin Tarentino', 'Year' => 1994, 'Notation' => 8.9]];

echo '<ul>';

foreach($movies as $movie => $info) {
  $i = 0;
  foreach($info as $k => $v) {
    if ($i == 0) {
      printf("%s\n", "<li>$k: $v<ul>");
    } else {
      printf("%s\n", "<li>$k: $v</li>");
    }
    ++$i;
  }
  echo '</ul></li>';   
}

echo '</ul>';
?>