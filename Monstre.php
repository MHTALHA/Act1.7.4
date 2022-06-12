<?php
require("Carte.php");
require("Sort.php");
class Monstre extends Carte{

 
 protected int $ptsVie;
 

 
 public function __construct(int $coutMana,int $nbDegat,int $ptsVie){

        parent::__construct($coutMana,$nbDegat);
        $this->ptsVie=$ptsVie;
    
 }

 public function getPtsVie():int{
   return $this->ptsVie;
   
}
public function getNbDegat():int{

   return $this->nbDegat;
}
public function minusNbVie($nbDegat):int{

    return $this->ptsVie-=$nbDegat;
 }
 


 public function attaquer(Monstre $monstre){
        if($this->nbDegat>$monstre->ptsVie){
            return 0;
        }else
    return $monstre->minusNbVie($this->nbDegat);
 }

 

}


 $monstre1 = new Monstre(2,5,10);
 $monstre2 = new Monstre(2,3,6);
 $sort1 = new Sort(2,6);
 $sort1->attaquer($monstre1).PHP_EOL;

 print_r(var_dump($monstre1));
 print_r(var_dump($sort1));