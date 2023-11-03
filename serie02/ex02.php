<?php
declare(strict_types=1);

$arr1 = [0, 1, 2, 3, 4, 5, 6];

function calcSum(array $arr): int {
  $sum = 0;
  
  foreach($arr as $el) {
    $sum += $el;
  }
  return $sum;
}


function calcStandardDeviation(array $arr1): float {
  $sum = calcSum($arr1);
  $average = $sum / count($arr1);
  $deviationArr = [];

  foreach ($arr1 as $key => $val) {
    $deviationArr[$key] = abs($average - $val);
  }

  $deviationSum = 0;

  foreach($deviationArr as $val) {
    $deviationSum += $val;
  }

  $standardDeviation = $deviationSum / count($arr1);
  return $standardDeviation;
}

$res = calcStandardDeviation($arr1);
printf("%s\n", "Standard deviation = " . round($res, 3));

?>