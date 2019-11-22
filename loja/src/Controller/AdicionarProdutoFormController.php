<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class AdicionarProdutoFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "CadastroClienteController.php",
                "rodape.php"],
            [
                "titulo"=>"Adicionar Roteiro"
            ]);
    }
}