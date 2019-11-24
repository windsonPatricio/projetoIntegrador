<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
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
                "clientes" => Usuario::all(),
                "titulo"=> "Lista de Produtos"
            ]
        );
    }
}