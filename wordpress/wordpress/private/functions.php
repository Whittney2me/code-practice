<?php

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location " . $location);
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = h($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}


?>
