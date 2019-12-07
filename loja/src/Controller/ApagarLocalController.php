<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Local;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ApagarLocalController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Local::delete($id);
        Transaction::close();
        header('Location: /listar-local', true, 302);
        exit();
    }
}