<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class EditarValorPacoteFormController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "editar-preco-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Roteiro",
                "pacote"=>Pacote::find($_GET["id"])
            ]);

    }
}