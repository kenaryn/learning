<?php
declare(strict_types=1);

function printNumbers(int $nb): void {
  for ($i = 1; $i <= $nb; ++$i) {
    echo $i . '<br />';
  }
}

printNumbers(10);
?>
