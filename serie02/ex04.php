<?php
declare(strict_types=1);
$martin = ['lname' => 'Dupond', 'fname' => 'Martin', 'age' => 18, 'nationality' => 'french'];
$kena = ['lname' => 'Kenaryn', 'fname' => 'Aerynth', 'age' => 338, 'nationality' => 'ur'];
$aurele = ['lname' => 'Aurèle', 'fname' => 'Plazz', 'age' => 38, 'nationality' => 'Erithrean'];
$persons = [$martin, $kena, $aurele];

foreach($persons as $person => $info) {
  foreach($info as $k => $v) {
    printf("%s\n", "$k: $v");
  }
  printf("%s\n", "");
}

printf("%s\n", "==================");

foreach($martin as $k => $v) {
  printf("%s\n", "$k: $v");
}
?>
