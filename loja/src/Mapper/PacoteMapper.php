<?php
namespace Ifnc\Tads\Mapper;
use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Estadia;
use Ifnc\Tads\Entity\Eventos;
use Ifnc\Tads\Entity\Item;
use Ifnc\Tads\Entity\Local;
use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Entity\Pacote_Estadia;
use Ifnc\Tads\Entity\Pacote_Transporte;
use Ifnc\Tads\Entity\Pacote_Trecho;
use Ifnc\Tads\Entity\Transporte;
use Ifnc\Tads\Entity\Venda;

class PacoteMapper
{
   public static function find($id){
       $pacote = Pacote::find($id);
       $pct_estadias = Pacote_Estadia::all("pacote_id={$pacote->id}");
       $pct_transportes = Pacote_Transporte::all("pacote_id={$pacote->id}");
       $pct_trechos = Pacote_Trecho::all("pacote_id={$pacote->id}");
       foreach ($pct_estadias as $pct_estadia){
           $pct_estadia->estadia_id = Estadia::find($pct_estadia->estadia_id);
           $pacote->addEstadia($pct_estadia);
       }
       foreach ($pct_transportes as $pct_transporte){
           $pct_transporte->transporte_id = Transporte::find($pct_transporte->transporte_id);
           $pacote->addTransporte($pct_transporte);
       }
       foreach ($pct_trechos as $pct_trecho){
           $pct_trecho->trechoLocal = Local::find($pct_trecho->trechoLocal);
           $pacote->addTrecho($pct_trecho);
       }


       return $pacote;
   }

}
