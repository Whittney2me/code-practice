<?php

$dbhost = 'localhost';
$dbuser = 'wordpress';
$dbpass = '70fc48dae85c0cc1b3241ee953e5af1260684bd4b63b1539';
$dbname = 'princess_sitters';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM parents";
$results_set = mysqli_query($connection, $query);

// 3. Use returned data (if any)

// 4. Release returned data
mysqli_free_result($results_set);

// 5. Close database connection
mysqli_close($connection);

?>
