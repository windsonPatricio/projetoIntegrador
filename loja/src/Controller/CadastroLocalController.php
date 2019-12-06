<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Local;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroLocalController implements IController
{

    public function request(): void
    {
        $local = new Local();
        $local->nome = $_POST['nome'];
        $local->endereco = $_POST['endereco'];
        $local->cidade = $_POST['cidade'];
        $local->estado = $_POST['estado'];
        $local->valorIngresso = $_POST['valorIngresso'];
        $local->dataCadastro = date('Y-m-d');

        Transaction::open();
        $local->store();
        Transaction::close();
        header('Location: /cadastro-local-form', true, 302);
        exit();
    }

}