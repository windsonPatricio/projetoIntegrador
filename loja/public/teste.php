<?php


use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\PacoteMapper;


require "../vendor/autoload.php";



Transaction::open();

$pacote = PacoteMapper::find(3);
$pacote->estadias[0]->estadia_id->estadia->nome;


var_dump($pacote);









