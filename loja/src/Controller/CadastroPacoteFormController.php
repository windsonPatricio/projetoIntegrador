<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class CadastroPacoteFormController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "cadastroPacoteForm.php",
                "rodape.php"],
            [
                "titulo"=>"Cadastro de pacote"
            ]);
    }
}