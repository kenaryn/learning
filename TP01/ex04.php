<?php
declare(strict_types=1);
echo '<p>Powers of 2 with a FOR loop:</p>';
for ($i= 0; $i <= 16; ++$i) {
  echo "2 ** $i = " . pow(2, $i) . '<br />';
}

$i = 0;
echo '<p>Powers of 2 with a WHILE loop:</p>';
while ($i <= 16) {
  echo "2 ** $i = " . pow(2, $i) . '<br />';
  ++$i;
}
?>