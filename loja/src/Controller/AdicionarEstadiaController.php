<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote_Estadia;
use Ifnc\Tads\Helper\Transaction;

class AdicionarEstadiaController implements IController
{

    public function request(): void
    {
        $pacote_estadia = new Pacote_Estadia();
        $pacote_estadia->dataReserva = $_POST['dataReserva'];
        $pacote_estadia->estadia_id = $_POST['estadia_id'];
        $pacote_estadia->pacote_id = $_POST['id'];



        Transaction::open();
        $pacote_estadia->store();
        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }

}