<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Eventos extends Record
{
    public $id;
    public $nome;
    public $tipo;
    public $valor;
    public $data;
    public $hora;

}