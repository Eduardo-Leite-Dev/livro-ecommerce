<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','ecommerce');

$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbc,'utf8');

function escape_data($data, $dbc){
    
    

    return mysqli_real_escape_string($dbc,trim($data));
}