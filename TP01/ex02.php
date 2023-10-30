<?php
declare(strict_types=1);
$dividend = 50;
$divisor = 3;
$rest = $dividend % $divisor;
echo "$dividend / $divisor = " . intdiv($dividend, $divisor)
. " and the rest is $rest";
?>