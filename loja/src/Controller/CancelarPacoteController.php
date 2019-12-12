<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class CancelarPacoteController implements IController
{

    public function request(): void
    {
        Transaction::open();
        $cancelar = Pacote::find($_GET["id"]);
        $cancelar->status = "Cancelado";
        $cancelar->store();

        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }
}