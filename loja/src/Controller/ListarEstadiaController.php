<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarEstadiaController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-estadia.php",
                "rodape.php"
            ],
            [
                "estadias" => Estadia::all(),
                "titulo"=> "Lista de Eventos"
            ]
        );
    }
}