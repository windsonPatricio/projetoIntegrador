<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarTransporteController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-transporte.php",
                "rodape.php"
            ],
            [
                "transporte" => Transporte::all(),
                "titulo"=> "Lista de Transporte"
            ]
        );
    }
}
