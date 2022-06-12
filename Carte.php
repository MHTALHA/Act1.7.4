<?php 


abstract class Carte {

    protected int $coutMana;
    protected int $nbDega;

    public function __construct(int $coutMana,int $nbDegat){

        $this->coutMana=$coutMana;
        $this->nbDegat=$nbDegat;
 }


 abstract public function attaquer(Monstre $m);


}