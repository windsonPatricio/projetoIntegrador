<?php

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\TipoUsuario;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\VendaMapper;
use Symfony\Component\Yaml\Yaml;

require "../vendor/autoload.php";

//$hash =  password_hash('123', PASSWORD_ARGON2I);

//echo $hash."<br>";

//echo password_verify('143',$hash);

$coisa = new TipoUsuario();


$coisa-> tipo= 1;
$coisa-> descricao = "administrador";

Transaction::open();
$coisa->store();
Transaction::close();

/*nada->id=2;
$nada->tipo = "Agente";

Transaction::open();
$nada->store();
Transaction::close();

$nada->id=3;
$nada->tipo = "Cliente";

Transaction::open();
$nada->store();
Transaction::close();
*/










