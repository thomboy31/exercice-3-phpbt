<?php

require_once 'BilletPleinTarif.php';

 class BilletReduit extends BilletPleinTarif{
       private string $justificatif;

public function __construct(int $newNumero , float $newPrix ,Seance $newSeance, string $newJustificatif){
     parent::__construct($newNumero , $newPrix , $newSeance );
     $this->justificatif = $newJustificatif;
}
public function calculerPrix():float{
    return $this->getPrix() * 0.7;
}
   public function imprimerDetail(): void {
        parent::imprimerDetail();
        echo "Justificatif : " . $this->justificatif . "<br>";
    }
 }



?>