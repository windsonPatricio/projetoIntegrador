<?php

namespace Ifnc\Tads\Controller;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;
use Ifnc\Tads\Mapper\PacoteMapper;

class ListarDetalhesPacoteController implements IController
{
    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "cabecalho.php",
                "listar-detalhes-pacote.php",
                "rodape.php"
            ],
            [
                "pacotes"=> PacoteMapper::find($_GET['id']),
                "titulo"=> "Detalhes Pacote"
            ]
        );
        header('Location: /detalhar-pacote', true, 302);
    }
}
