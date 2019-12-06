<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ApagarTransporteController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Transporte::delete($id);
        Transaction::close();
        header('Location: /listar-transporte', true, 302);
        exit();
    }
}