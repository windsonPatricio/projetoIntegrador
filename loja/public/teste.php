<?php

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Hotel;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\VendaMapper;
use Symfony\Component\Yaml\Yaml;

require "../vendor/autoload.php";

//$hash =  password_hash('123', PASSWORD_ARGON2I);

//echo $hash."<br>";

//echo password_verify('143',$hash);

$nada = new Roteiro();


$nada->descricao="vai dar certo!!";
$nada->data_de_ida= "22/08/1994";
$nada->data_de_volta= "01/05/2020";

$hotel = new Hotel();
$hotel->nome = "Hotel passa e fica";
$hotel->endereco = "Rua dos alfeneiros";
$hotel->telefone = "84 99172840";
$hotel->valorDiaria = 200;
$hotel->dataCadastro = date('Y-m-d');


Transaction::open();
$hotel->store();
Transaction::close();






