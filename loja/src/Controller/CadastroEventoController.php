<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroEstadiaController implements IController
{

    public function request(): void
    {
        $evento = new Eventos();
        $evento->nome = $_POST['nome'];
        $evento->tipo = $_POST['tipo'];
        $evento->valor = $_POST['valor'];
        $evento->data = $_POST['data'];
        $evento->hora = $_POST['hora'];

        Transaction::open();
        $evento->store();
        Transaction::close();
        header('Location: /portalAdm', true, 302);
        exit();
    }

}