<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PortalAdmController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "paginaAdm.php",
                "rodape.php"
            ],
            [
                "usuario" => $_SESSION['usuario']
            ]
        );
    }
}