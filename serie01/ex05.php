<?php
declare(strict_types=1);
  
  function printPowerOfTwo(int $nb): void {
    echo 'FOR loop:<br />';
    echo '<ul>';
    for ($i = 0; $i <= $nb; ++$i) {
      echo "<li>2 ** " . $i . " = " . 2 ** $i . "</li>";
    }
    echo '</ul>';
  }


printPowerOfTwo(16);
?>