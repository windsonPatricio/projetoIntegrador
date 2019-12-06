<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ApagarEstadiaController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Estadia::delete($id);
        Transaction::close();
        header('Location: /listar-estadia', true, 302);
        exit();
    }
}