<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Helper\Render;

class PortalController implements IController
{

    public function request(): void
    {
        echo Render::html(
            [
                "pagina-inicial.php",
                "rodape.php"
            ],[

        ]);
    }
}