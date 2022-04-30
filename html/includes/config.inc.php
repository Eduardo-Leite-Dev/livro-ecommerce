<?php

//constantes do sistema 
if(!define('LIVE','')) DEFINE('LIVE', false);
DEFINE('CONTACT_EMAIL', 'edusoares1992@gmail.com');
DEFINE('LIVE', true);
require('./includes/config.inc.php');
DEFINE('BASE_URI','/opt/lampp/htdocs/livro-ecommerce/');
DEFINE('BASE_URL','');
DEFINE('MYSQL',BASE_URI.'mysql.inc.php');

session_start();

function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars){

    $message = "Um erro ocorreu '$e_file' e $e_line:\n$e_message\n";
    $message .= "<pre>".print_r(debug_backtrace(), 1)."</pre>\n";

    if(!LIVE){
        echo '<div class="alert alert-danger">' .nl2br($message). '</div>';
    }else{
        error_log($message, 1, CONTACT_EMAIL, 'From:edusoares1992@gmail.com');
        if($e_number != E_NOTICE){
            echo '<div class="alert alert-danger"> ocorreu um erro de sistema. Pedimos desculpas pela inconveniência.</div>';
        }
    }

    return true;
}
set_error_handler('my_error_handler');

