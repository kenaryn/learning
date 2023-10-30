<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hi people</title>
</head>
<body>
  <?php
   echo '<h1>First PHP script</h1><br />';
  date_default_timezone_set('America/Chicago');
  echo '<h2>Today is: ' . date('l jS \of F Y h:i:s A') . '</h2><br />';
  ?>
  <p>I am now using Adminer in stead of PhpMyAdmin!</p>

  <?php
  $passed_drivers_license_exam = TRUE;
  if ($passed_drivers_license_exam == TRUE) {
    echo "Award driver's license.<br />";
  }
  ?>
</body>
</html>