<?php
DEFINE('DB_USER','username');
DEFINE('DB_PASSWORD','password');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','ecommerce');

$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
