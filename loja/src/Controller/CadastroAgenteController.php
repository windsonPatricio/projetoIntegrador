<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroAgenteController implements IController
{

    public function request(): void
    {
        $agente = new Usuario();
        $agente->nome = $_POST['nome'];
        $agente->endereco = $_POST['endereco'];
        $agente->cpf = $_POST['CPF'];
        $agente->dataNascimento = $_POST['dataNascimento'];
        $agente->estado = $_POST['estado'];
        $agente->cidade = $_POST['cidade'];
        $agente->sexo = $_POST['sexo'];
        $agente->senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);
        $agente->email = $_POST['email'];
        $agente->dataCadastro = date('Y-m-d');

        Transaction::open();
        $agente->store();
        Transaction::close();
        header('Location: /portalAdm', true, 302);
        exit();
    }

}