<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdicionarEstadiaFormController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "adicionar-estadia-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Estadia ao Pacote",
                "estadias"=> Estadia::all()
            ]);
    }
}