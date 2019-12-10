<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class AprovarPacoteController implements IController
{

    public function request(): void
    {
        Transaction::open();
        $aprovar = Pacote::find($_GET["id"]);
        $aprovar->status = "Aprovado";

        Transaction::open();
        $aprovar->store();
        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }
}