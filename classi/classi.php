<?php

/* Crea e modella classi, a piacere, per gestire i prodotti di un magazzino.
Buona creazione e buon divertimento */


class MagazzinoProdotti{ // super classe

    private $id;
    protected $modello;
    protected $prezzo;

    public function __construct(){}

    public function setModello($_id,$_modello,$_prezzo){

        $identificatore=$this->id=$_id;
        $modelloProdotto=$this->modello = $_modello;
        $prezzo=$this->prezzo = $_prezzo;
        include('modelli/modello.php');
    }

    public function getIdRand($_id){

        $this->id=$_id;
        return  uniqid($_id); 
    }
}

require_once('istanza.php');




