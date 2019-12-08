<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Local;
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
                "locais" => Local::all(),
                "eventos" => Eventos::all(),
            ]);
    }
}