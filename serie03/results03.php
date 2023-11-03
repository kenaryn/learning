<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serie 3 - Exercice 3</title>
  <link rel="stylesheet" href="./default.css" title="Main design" />
</head>
<body>

<?php
$num = (int)$_GET['num--input'];
$min = (int)$_GET['minimum'];
$max = (int)$_GET['maximum'];

echo "<p>Is $num included between $min and $max?</p>";


if (($num >= $min) && ($num <= $max)) {
  echo "<p class='good'>Yes, $num is included between $min and $max</p>";
} else {
  echo "<p class='bad'>No, $num is not included between $min and $max</p>";
}
?>

<p><a href="./ex03.php">Back to index</a>

</body>
</html>