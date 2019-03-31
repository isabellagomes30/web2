<?php

$chave = $_GET['ch'];

if($chave == 'doce'){
    echo 'Doces:<br> Bolo<br> Chocolate<br> Bala';
}

if($chave == 'salgado'){
    echo 'Salgados:<br> Coxinha<br> Bolinha de queijo<br> Esfirra';
}

if($chave == 'quente'){
    echo 'Bebidas quentes: <br>Café <br>Chimarrão <br>Chocolate quente';
}

if($chave == 'gelado'){
    echo 'Bebidas geladas: <br>Água <br>Milk shake <br>Refrigerante';
}
