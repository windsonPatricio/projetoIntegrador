<?php

namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Roteiro extends Record
{
    public $id;
    public $descricao;
    public $data_de_ida;
    public $data_de_volta;


    public function getTotalCusto(){
        return $this->estoque * $this->preco_custo;
    }

}