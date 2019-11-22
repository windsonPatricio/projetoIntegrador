<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Helper\Transaction;

class AdicionarProdutoController implements IController
{

    public function request(): void
    {
        $hotel = new Estadia();
        $hotel->nome = $_POST['nome'];
       // $hotel->endereco = $_POST['endereco'];
        $hotel->telefone = $_POST['telefone'];
        $hotel->valorDiaria = $_POST['valorDiaria'];
        $hotel->dataCadastro = date('Y-m-d');

        Transaction::open();
        $hotel->store();
        Transaction::close();
        header('Location: /listar-produtos', true, 302);
        exit();
    }

}