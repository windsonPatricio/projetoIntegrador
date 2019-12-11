<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Helper\Transaction;

class EditarValorPacoteController
{

    public function request(): void
    {
        Transaction::open();
        $pacote = Pacote::find($_POST["id"]);
        $pacote->valorPacote = $_POST['valor'];
        $pacote->store();

        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }
}