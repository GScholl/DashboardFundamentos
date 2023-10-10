<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'sites');

$conn = new Mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error){
    die("Conexão falhou: " .$conn->connect_error);
}

?>