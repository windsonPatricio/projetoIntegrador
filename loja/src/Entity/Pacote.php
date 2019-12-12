<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Pacote extends Record
{

        public $id;
        public $quantidadeMax;
        public $status;
        public $valorPacote;
        public $estadias;
        public $trechos;
        public $transportes;

        public function __construct()
        {
            $this->estadias=[];
            $this->trechos=[];
            $this->transportes=[];
        }

        public function addEstadia($estadia)
        {
            $this->estadias[] = $estadia;
        }

        public function addTrecho($trecho)
        {
            $this->trechos[] = $trecho;
        }

        public function addTransporte($transporte)
        {
            $this->transportes[] = $transporte;
        }

        public function getEstadias()
        {
            return $this->estadias;
        }

        public function getTrecho()
        {
            return $this->trechos;
        }

        public function getTransportes()
        {
            return $this->transportes;
        }

}