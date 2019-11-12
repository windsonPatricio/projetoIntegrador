<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Hotel;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class ListarProdutosController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-produtos.php",
                "rodape.php"
            ],
            [
                "hotel" => Hotel::all(),
                "titulo"=> "Lista de Produtos"
            ]
        );
    }
}