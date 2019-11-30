<?php


namespace Ifnc\Tads\Entity;


use Ifnc\Tads\Helper\Record;

class Estadia extends Record
{
    public $id;
    public $nome;
    public $tipo;
    public $endereco;
    public $cidade;
    public $estado;
    public $telefone;
    public $valorDiaria;

}