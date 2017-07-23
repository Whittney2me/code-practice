<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';

echo "Welcome, " . $firstname . " " . $lastname "<br />";

} else {
  redirect_to(url_for(''));
}

?>
