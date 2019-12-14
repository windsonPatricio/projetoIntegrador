<?php


use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\PacoteMapper;


require "../vendor/autoload.php";



Transaction::open();

$pacote = PacoteMapper::find(5);
var_dump($pacote->estadias->estadia_id->estadia->cidade);


//var_dump($pacote);









