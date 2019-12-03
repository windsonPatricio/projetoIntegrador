<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PortalController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "pagina-inicial.php",
                "rodape.php"
            ],[

            "estadias" => Estadia::all(),
            "titulo"=>"AvengerTUR",

        ]);
    }
}