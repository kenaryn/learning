declare(strict_types=1);

<?php
  if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    echo 'Your web browser is Firefox!!';
  }
  echo '<br />';
  
  echo strlen('My string will return its length!');
  echo '<br />';
  echo strtoupper('i am not yelling!');

  echo '<p>';
  $fname = 'Aurèle';
  echo 'hi ' . $fname . '!';
  $age = 38;
  $age++;
  if ($age > 50) {
    echo "OK, boomer.";
  } else {
    echo "OK, zoomer.";
  }
  echo '</p>';

  echo '<ul>';
  $nb = 0;
  do {
    echo "<li>$nb</li>";
    $nb++;
  } while ($nb < 10);
  echo '</ul>';

  $arr1 = new ArrayObject();
  for ($i=1; $i <= 10; ++$i) {
    $arr1->append($i);
  }

  foreach($arr1 as $key => $value) {
    echo "[$key]->$value<br />";
  }

  ?>
  <?php
    if (!isset($_POST['fname']) && !isset($_POST['age'])) {
  ?>
    <!-- <form action="action.php" method="post"> -->
    <form action="" method="post">
      <label for="fname">Your name: </label>
      <input id="fname" name="fname" type="text" />
      
      <label for="age">Your age: </label>
      <input id="age" name="age" type="number" />
      
      <button type="submit">Submit</button>
    </form>
    
    <ul>
  <?php
  } else {
    echo '<p>Your biography:</p>';

    foreach ($_POST as $key => $value) {
      echo "<li>$[$key]=$value</li>";
    }
  }
  ?>
    </ul>
  <!-- <?php include_once './action.php'; ?> -->

  <p>Today is <?php echo date("d-m-y"); ?></p>