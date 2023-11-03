<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serie 3 - Exercice 3</title>
  <link rel="stylesheet" href="./default.css" title="Main design" />
</head>
<body>
<h1>Numbers-related tests</h1>
<h2>Enter some numbers</h2>

<form action="./results03.php" method="GET">
  Is <input type="text" id="num--input" name="num--input" minlength="1" maxlength="3" size="3" /> included betwwen <input type="text" id="minimum" name="minimum" minlength="1" maxlength="3" size="3" /> and <input type="text" id="maximum" name="maximum" minlength="1" maxlength="3" size="3" /> ?

  <p><button type="submit" id="confirm">Confirm</button></p>
</form>

</body>
</html>