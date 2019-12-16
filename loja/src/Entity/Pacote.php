<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Pacote extends Record
{

        public $id;
        public $quantidadeMax;
        public $status;
        public $valorPacote;
        public $dataInicio;
        public $dataFim;
        public $estadias;
        public $trechos;
        public $transportes;
        public $eventos;

        public function __construct()
        {
            $this->estadias=[];
            $this->trechos=[];
            $this->transportes=[];
            $this->eventos=[];
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


        public function getTrechos()
        {
            return $this->trechos;
        }

        public function getTransportes()
        {
            return $this->transportes;
        }

}