<?php
require 'environment.php';

$config = array();
//Definindo dados padrões das paginas
define('DEFAULT_PAGE_TITLE','Titulo da página');


if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://localhost/mvc/");
    $config['dbname'] = 'mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "https://votan.dev/mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
