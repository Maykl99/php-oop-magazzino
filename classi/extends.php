<?php 
#estensione della classe presente nel file class.php
class SpecificheProdotto extends MagazzinoProdotti{

    private $altezza;
    private $condizione;
    private $peso;

    public function setModello1($_altezza,$_condizione,$_peso){

        $altezzaProdotto=$this->altezza = $_altezza;
        $condizioneProdotto=$this->condizione = $_condizione;
        $pesoProdotto=$this->peso= $_peso;
    }
};

$specificheProdotto0=new SpecificheProdotto;
$specificheProdotto0->setModello1(178,'nuovo',134);