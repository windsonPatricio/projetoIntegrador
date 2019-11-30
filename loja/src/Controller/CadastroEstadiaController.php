<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroEstadiaController implements IController
{

    public function request(): void
    {
        $estadia = new Estadia();
        $estadia->nome = $_POST['nome'];
        $estadia->endereco = $_POST['endereco'];
        $estadia->tipo = $_POST['tipoHospedagem'];
        $estadia->cidade = $_POST['cidade'];
        $estadia->estado = $_POST['estado'];
        $estadia->telefone = $_POST['telefone'];
        $estadia->valorDiaria = $_POST['valorDiaria'];
        $estadia->dataCadastro = date('Y-m-d');

        Transaction::open();
        $estadia->store();
        Transaction::close();
        header('Location: /portalAdm', true, 302);
        exit();
    }

}