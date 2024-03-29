<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Transaction;

class ApagarProdutoController implements IController
{

    public function request(): void
    {
        $id = $_GET["id"];
        Transaction::open();
        Usuario::delete($id);
        Transaction::close();
        header('Location: /listar-produtos', true, 302);
        exit();
    }
}