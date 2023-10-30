<?php
declare(strict_types=1);

function convertSecondstoHours(int $seconds): string {
  $duration = 6700;
  $starting_duration = $duration;
  $hours = intdiv($duration, 3600);
  // Update what is left to duration.
  $duration %= 3600;
  $minutes = intdiv($duration, 60);
  $duration %= 60;
  // Assign what is left for seconds.
  $seconds = $duration;

  return "$starting_duration seconds is equivalent to ${hours}h${minutes}m${seconds}s.";
}

echo convertSecondstoHours(6700);
?>