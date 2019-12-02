<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class CadastroTransporteFormController implements IController
{
    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroTransporteForm.php",
                "rodape.php"],
            [
                // "titulo"=>"Cadastro de Cliente"
            ]);
    }
}