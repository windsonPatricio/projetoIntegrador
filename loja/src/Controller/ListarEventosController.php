<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarEventosController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-eventos.php",
                "rodape.php"
            ],
            [
                "eventos" => Eventos::all(),
                "titulo"=> "Lista de Eventos"
            ]
        );
    }
}