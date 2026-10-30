<?php

class Seance {
    private string $date;
    private string $heure;
    



public function __construct(string $newDate , string $newHeure){
    $this->date = $newDate;
    $this->heure = $newHeure;
}
  public function getDate(): string {
        return $this->date;
    }

    public function getHeure(): string {
        return $this->heure;
    }
}

?>