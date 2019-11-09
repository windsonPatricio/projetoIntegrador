<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Helper\Transaction;

class EditarProdutoController
{

    public function request(): void
    {
        $produto = new Roteiro();
        $produto->id = $_POST['id'];
        $produto->descricao = $_POST['descricao'];
        $produto->estoque = $_POST['estoque'];
        $produto->preco_custo = $_POST['preco_custo'];
        $produto->preco_venda = $_POST['preco_venda'];
        $produto->codigo_barras =  $_POST['codigo_barras'];
        $produto->data_cadastro = date('Y-m-d');
        $produto->origem =  $_POST['origem'];
        Transaction::open();
        $produto->store();
        Transaction::close();
        header('Location: /listar-produtos', true, 302);
        exit();
    }
}