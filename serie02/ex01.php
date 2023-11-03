<?php
declare(strict_types=1);

// Arrays.
$simple[0] = 2023;
$simple[1] = "DEVWEB-18-S2";
$simple[2] = 11.12;

$table[0][0] = "12";
$table[0][1] = "tv";
$table[1][0] =" 1245.678";
$table[1][1] = "bye";

$associative["name"] = "Toto's family name";
$associative["age"] = 12;
$associative["addr"] = "22 rue des bois fleuri";

var_dump($simple);
echo "<p>======================</p>";
foreach($simple as $k => $v) {
  echo "$k: $v<br />";
}

echo "<p>With 2 foreach:</p>";
foreach($table as $k1 => $v1) {
  foreach($v1 as $k2 => $v2) {
    echo "\t $k2: $v2 <br />";
  }
}

echo "<p>With 2 for:</p>";
for ($row = 0; $row <count($table); ++$row) {
  for ($col = 0; $col < count($table); ++$col) {
    echo $table[$row][$col] . "<br />";
  }
}

echo "<p>======================</p>";
foreach ($associative as $k => $v) {
  echo "$k: $v<br />";
}
?>