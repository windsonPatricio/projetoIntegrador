<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class CadastroClienteFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroClienteForm.php",
                "rodape.php"],
            [
               // "titulo"=>"Cadastro de Cliente"
            ]);
    }
}