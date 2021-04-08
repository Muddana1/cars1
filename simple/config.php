<?php
/* Database credentials. */
define('DB_SERVER', 'us-cdbr-east-03.cleardb.com');
define('DB_USERNAME', 'beb59f30ab670f');
define('DB_PASSWORD', 'fd9ba7ef');
define('DB_NAME', 'heroku_2d004d87e93034c');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
