<?php


use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\PacoteMapper;


require "../vendor/autoload.php";



Transaction::open();

$pacote = PacoteMapper::find(3);
$despesa1 = $pacote->estadias[0]->estadia_id->valorDiaria;
$despesa2 = $pacote->transportes[0]->transporte_id->valorFrete;

var_dump($despesa1);









