Hi <?php echo htmlentities($_POST['fname']); ?>. 
You are <?php echo (int)$_POST['age'] . ' year old.<br />';
// var_dump($_POST); ?>

<?php
/**
 * The business has a requirement that all phone numbers
 * be formatted with the (123) 123-1234 format.
 */
function formatPhoneNumber($phone_string) {
  if (preg_match('/^\+\d(\d{3})(\d{4})$/', $data, $matches)) {
    $result = "(matches[1]) $matches[2]-$matches[3]";
    return $result;
  }
}

$farentheit_temperatures = array();
$friends = [];
?>