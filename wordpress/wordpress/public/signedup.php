<?php

require_once('../private/initialize.php');

if(is_post_request()) {

$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';

echo "Welcome, " . $firstname . $lastname "<br />";

} else {
  redirect_to(url_for(''));
}

?>
