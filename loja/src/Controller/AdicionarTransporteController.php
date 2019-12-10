<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote_Transporte;
use Ifnc\Tads\Helper\Transaction;

class AdicionarTransporteController implements IController
{

    public function request(): void
    {
        $pacote_Transporte = new Pacote_Transporte();
        $pacote_Transporte->dataAluguel = $_POST['dataAluguel'];
        $pacote_Transporte->transporte_id = $_POST['transporte_id'];
        $pacote_Transporte->pacote_id = $_POST['id'];



        Transaction::open();
        $pacote_Transporte->store();
        Transaction::close();
        header('Location: /listar-pacote', true, 302);
        exit();
    }

}