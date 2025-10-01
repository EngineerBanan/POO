<?php
class Ensoleillement {
    private $libelle;

    public function setLibelle($libelle) {
        if (empty($libelle)) {
            echo "L'ensoleillement est obligatoire, veuillez fournir un libellé.";
            return false;
        }
        $this->libelle = $libelle;
    }

    public function afficheLibelle() {
        return $this->libelle;
    }
}
?>
