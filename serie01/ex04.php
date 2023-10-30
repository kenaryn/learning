<?php
declare(strict_types=1);

function printOddNumbers(int $nb): void {
  for ($i = 2; $i <= $nb; ++$i) {
    if ($i % 2 == 0) {
      if ($i != $nb) {
        echo "$i - ";
      } else {
        echo $i;
      }
    }
  }
}

printOddNumbers(24);
?>
