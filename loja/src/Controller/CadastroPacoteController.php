<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Entity\Pacote_Estadia;
use Ifnc\Tads\Entity\Roteiro;
use Ifnc\Tads\Entity\Usuario;
use Ifnc\Tads\Helper\Record;
use Ifnc\Tads\Helper\Transaction;

class CadastroPacoteController implements IController
{

    public function request(): void
    {
        $pacote = new Pacote();
        $pacote->nome = $_POST['nome'];
        $pacote->quantidadeMax = $_POST['quantidadeMax'];
        $pacote->status = 'em analise';
        $pacote->valorPacote = $_POST['valor'];
        $pacote->dataInicio = $_POST['dataInicio'];
        $pacote->dataFim = $_POST['dataFim'];
        $pacote->dataCadastro =  date('d-m-Y');

        Transaction::open();
        $pacote->store();
        Transaction::close();

        header('Location: /listar-pacote', true, 302);
        exit();
    }

}