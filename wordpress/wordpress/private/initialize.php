<?php
ob_start(); //output buffering is turned on

// Assgined file paths to PHP constants
//__FILE__ returns to the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');

require_once('functions.php');

 ?>
