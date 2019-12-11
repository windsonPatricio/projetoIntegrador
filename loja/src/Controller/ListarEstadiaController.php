<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarDetalhesPacoteController implements IController
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
                "estadia" => Estadia::all(),
                "titulo"=> "Lista de Estadias"
            ]
        );
    }
}
