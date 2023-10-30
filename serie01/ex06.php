<?php
  declare(strict_types=1);
  
  function printPowerWhile(int $nb): void {
    /**
     * Print powers of 2 from 0 to n.
     */
    echo 'WHILE loop:<br />';
    echo '<ul>';
    $i = 0;
    while ($i <= $nb) {
      echo "<li>2 ** $i = " . 2 ** $i . "</li>";
      ++$i;
    }
    echo '</ul>';
  }

  printPowerWhile(16);
  ?>