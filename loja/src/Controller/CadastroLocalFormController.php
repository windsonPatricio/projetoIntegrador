<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class CadastroLocalFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroLocalForm.php",
                "rodape.php"],
            [
               // "titulo"=>"Cadastro de Cliente"
            ]);
    }
}