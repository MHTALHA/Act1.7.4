<?php
require_once('Carte.php');
class Sort extends Carte{


  

 public function attaquer(Monstre $monstre){

    $monstre->minusNbVie($this->nbDegat);
 }

 

}
