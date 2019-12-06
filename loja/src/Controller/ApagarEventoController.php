<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ApagarEventoController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Eventos::delete($id);
        Transaction::close();
        header('Location: /listar-eventos', true, 302);
        exit();
    }
}