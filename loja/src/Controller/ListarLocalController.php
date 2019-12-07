<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Local;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarLocalController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-local.php",
                "rodape.php"
            ],
            [
                "local" => Local::all(),
                "titulo"=> "Lista de Locais"
            ]
        );
    }
}
