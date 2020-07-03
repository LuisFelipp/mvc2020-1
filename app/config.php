<?php

/**
*@constante DATABASE valores para conexao ao banco em producao
*/

//Configuracao Banco de Dados Local
//define("HOST",     "localhost");
//define("USER",     "root");
//define("PASSWD",   "");
//define("DATABASE", "nome_banco");

//Configuracoes Banco no 000webhost
//define("HOST",     "localhost");
//define("USER",     "id");
//define("PASSWD",   "");
//define("DATABASE", "id");

define('DATABASE', [
    'host' => 'localhost',
    'dbname' => 'id13594392_aulab3',
    'user' => 'id13594392_thiago',
    'password' => '/a01^e|T{ivBf6Hs',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_EMULATE_PREPARES, false
    ],
]);

//timezone
date_default_timezone_set('America/Sao_Paulo');

//urls
define('ROOT' , 'http://localhost/MVC2020/app/views/assets/');