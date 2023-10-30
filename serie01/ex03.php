<?php
declare(strict_types=1);

function printNumbersReverse(int $nb): void {
  for ($i = $nb; $i >= 0; --$i) {
    echo $i . '<br />';
  }
}

printNumbersReverse(11);
?>