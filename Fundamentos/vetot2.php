<?php   
#array()

# FORMA DORETA SEM FUNÇÃO
$frutas = array('banana', 'maca', 'pera');

# FORMA DORETA COM FUNÇÃO 
$vegetais =  array('alface', 'couve', 'espinafre'); 

                #count: conta quantos elementos tem no array.
for ($i=0; $i < count($vegetais); $i++) {
    echo $vegetais[$i]."<br/>";
}                  # . concetração(adição).