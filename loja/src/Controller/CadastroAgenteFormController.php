<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class CadastroAgenteFormController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroAgenteForm.php",
                "rodape.php"],
            [
               // "titulo"=>"Cadastro de Cliente"
            ]);
    }
}