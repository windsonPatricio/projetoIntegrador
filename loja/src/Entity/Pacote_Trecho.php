<?php

namespace Ifnc\Tads\Entity;

use Ifnc\Tads\Helper\Record;

class Pacote_Trecho extends Record
{
    public $id;
    public $dataInicio;
    public $dataFim;
    public $horaInicio;
    public $horaFim;
    public $valor;
    public $trechoLocal;
    public $trechoEvento;
    public $pacote_id;
}