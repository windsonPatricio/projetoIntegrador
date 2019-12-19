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
        $pacote = PacoteMapper::find($_GET['id']);
        echo Render::html(
            [
                "cabecalho.php",
                "listar-detalhes-pacote.php",
                "rodape.php"
            ],
            [

                "titulo"=> "Detalhes Pacote",
                "estadias" =>  $pacote->getEstadias(),
                "transportes"=> $pacote->getTransportes(),
                "trechos"=> $pacote->getTrechos(),
                 "usuario" => $_SESSION['usuario']
            ]
        );
        header('Location: /detalhar-pacote', true, 302);
    }
}
