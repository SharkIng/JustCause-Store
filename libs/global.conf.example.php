<?php
/*
 * Database Connection info
 * Author: @CodeJam2015, SharkIng
 */

// Define Database Connection
define('DB_HOST','localhost');
define('DB_PORT','5555');
define('DB_FILE','./tmp/mysql.sock');
define('DB_USER','example');
define('DB_PWD','computer');
define('DB_DBNAME','example');

// Using MySQL
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME,DB_PORT,DB_FILE);

?>