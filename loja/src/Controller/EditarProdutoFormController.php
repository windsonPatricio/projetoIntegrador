<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class EditarProdutoFormController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "editar-produto-form.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Roteiro",
                "produto"=>Roteiro::find($_GET["id"])
            ]);

    }
}