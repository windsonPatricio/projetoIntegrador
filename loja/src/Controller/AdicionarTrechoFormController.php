<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Local;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class AdicionarTrechoFormController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "adicionar-trecho-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Estadia ao Pacote",
                "locais"=> Local::all(),
                "eventos"=> Eventos::all()
            ]);
    }
}