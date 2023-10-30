<?php
declare(strict_types=1);
foreach ($argv as $key => $value) {
  if ($key != 0) {
    echo "$value - ";
  }
}
?>