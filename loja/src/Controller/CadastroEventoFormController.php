<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Helper\Render;

class CadastroEstadiaFormController implements IController
{
    public function request(): void
    {
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroEventoForm.php",
                "rodape.php"],
            [
                // "titulo"=>"Cadastro de Cliente"
            ]);
    }
}