<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote_Estadia;
use Ifnc\Tads\Entity\Pacote_Trecho;
use Ifnc\Tads\Helper\Transaction;

class AdicionarTrechoController implements IController
{

    public function request(): void
    {
        $pacote_trecho = new Pacote_Trecho();
        $pacote_trecho->dataInicio = $_POST['dataInicio'];
        $pacote_trecho->dataFim = $_POST['dataFim'];
        $pacote_trecho->horaInicio = $_POST['horaInicio'];
        $pacote_trecho->horaFim = $_POST['horaFim'];
        $pacote_trecho->valor = $_POST['valor'];
        $pacote_trecho->trechoLocal = $_POST['trechoLocal'];
        $pacote_trecho->trechoEvento = $_POST['trechoLocal'];
        $pacote_trecho->pacote_id = $_POST['id'];



        Transaction::open();
        $pacote_trecho->store();
        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }

}