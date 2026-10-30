<?php

require_once 'Seance.php';

class BilletPleinTarif {
    private int $numero;
    private float $prix;
    private Seance $seance;

public function __construct(int $newNumero , float $newPrix, SEANCE $newSeance){
    $this->numero = $newNumero;
    $this->prix = $newPrix;
    $this->seance = $newSeance;
}
public function calculerPrix():float{
    return $this->prix;
}
public function imprimerDetail(): void {
     echo "Numéro : " . $this->numero . "<br>";
        echo "Prix : " . $this->calculerPrix() . " €<br>";
        echo "Date : " . $this->seance->getDate() . "<br>";
        echo "Heure : " . $this->seance->getHeure() . "<br>";
}
 public function getPrix(): float
    {
        return $this->prix;
    }
}


?>