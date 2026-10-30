<?php

require_once 'BilletPleinTarif.php';

class BilletEnfant extends BilletPleinTarif{
      private int $age;
      
      public function __construct(int $newNumero , float $newPrix ,Seance $newSeance, int $newAge){
     parent::__construct($newNumero , $newPrix , $newSeance );
     $this->age = $newAge;
      }

      public function calculerPrix():float{
    return 5.0;
}
public function imprimerDetail(): void {
        parent::imprimerDetail();
        echo "Âge : " . $this->age . " ans<br>";
    }

}


?>