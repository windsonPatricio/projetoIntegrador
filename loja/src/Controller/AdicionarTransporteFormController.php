<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdicionarTransporteFormController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "adicionar-transporte-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Transporte ao Pacote",
                "transportes"=> Transporte::all()
            ]);
    }
}