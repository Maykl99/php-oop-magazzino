<?php

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