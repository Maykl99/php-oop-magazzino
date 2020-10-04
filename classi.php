<?php

/* Crea e modella classi, a piacere, per gestire i prodotti di un magazzino.
Buona creazione e buon divertimento */


class MagazzinoProdotti{ // super classe

    private $id;
    private $modello;
    private $prezzo;

    public function __construct(){
    }

    public function setModello($_id,$_modello,$_prezzo){

        $identificatore=$this->id=$_id;
        $modelloProdotto=$this->modello = $_modello;
        $prezzo=$this->prezzo = $_prezzo;
        include('modello.php');
    }

    public function getIdRand($_id){

        $this->id=$_id;
        return  uniqid($_id); 
    }
}

class Specifiche extends MagazzinoProdotti{

    private $condizione;
    private $peso;

};

$prodotto0= new MagazzinoProdotti();
$prodotto1= new MagazzinoProdotti();
$prodotto2= new MagazzinoProdotti();
$prodotto3= new MagazzinoProdotti();

$val=$prodotto0->getIdRand('id');
$val1=$prodotto0->getIdRand('id');
$val2=$prodotto0->getIdRand('id');
$val3=$prodotto0->getIdRand('id');


echo $prodotto0->setModello($val,'modello articolo 1',34) . '<br>';
echo $prodotto1->setModello($val1,'modello articolo 2',45) . '<br>';
echo $prodotto2->setModello($val2,'modello articolo 3',21) . '<br>';
echo $prodotto3->setModello($val3,'modello articolo 4',11) . '<br>';

