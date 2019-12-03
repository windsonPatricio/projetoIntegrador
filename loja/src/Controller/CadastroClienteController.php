<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroClienteController implements IController
{

    public function request(): void
    {
        $cliente = new Usuario();
        $cliente->nome = $_POST['nome'];
        $cliente->endereco = $_POST['endereco'];
        $cliente->cpf = $_POST['CPF'];
        $cliente->dataNascimento = $_POST['dataNascimento'];
        $cliente->estado = $_POST['estado'];
        $cliente->cidade = $_POST['cidade'];
        $cliente->sexo = $_POST['sexo'];
        $cliente->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        $cliente->email = $_POST['email'];
        $cliente->dataCadastro = date('Y-m-d');

        Transaction::open();
        $cliente->store();
        Transaction::close();

        header('Location: /listar-produtos', true, 302);
        exit();
    }

}