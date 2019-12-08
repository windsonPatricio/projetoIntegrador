<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarPacoteController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-pacote.php",
                "rodape.php"
            ],
            [
                "pacote" => Pacote::all(),
                "titulo"=> "Lista de Estadias"
            ]
        );
    }
}
