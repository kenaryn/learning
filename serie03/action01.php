<?php
declare(strict_types=1);
echo "Hi " . htmlentities($_POST['fname']) . " " . htmlentities($_POST['lname']) . ", you are " .
"born in " . (int)($_POST['birth--year']) . " at " . htmlentities($_POST['birth--place']) . ".";
?>