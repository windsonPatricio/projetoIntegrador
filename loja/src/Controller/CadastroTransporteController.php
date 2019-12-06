<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroTransporteController implements IController
{

    public function request(): void
    {
        $transporte = new Transporte();
        $transporte->nome = $_POST['nome'];
        $transporte->endereco = $_POST['endereco'];
        $transporte->tipo = $_POST['tipoTransporte'];
        $transporte->cidade = $_POST['cidade'];
        $transporte->estado = $_POST['estado'];
        $transporte->telefone = $_POST['telefone'];
        $transporte->valorFrete = $_POST['valorFrete'];
        $transporte->dataCadastro = date('Y-m-d');

        Transaction::open();
        $transporte->store();
        Transaction::close();
        header('Location: /cadastro-Transporte-form', true, 302);
        exit();
    }

}