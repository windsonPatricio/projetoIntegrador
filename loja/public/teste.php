<?php


use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\PacoteMapper;


require "../vendor/autoload.php";



Transaction::open();

$pacote = PacoteMapper::find(5);
$a = $pacote->getEstadias();
echo $a[0]->dataReserva;










