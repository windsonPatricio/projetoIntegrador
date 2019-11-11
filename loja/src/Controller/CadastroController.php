<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class CadastroController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "form-cadastro.php",
                "rodape.php"
            ],[

        ]);
    }
}