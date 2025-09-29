<?php
class Fleur {
    private $nom;
    private $prix;
    private $image;
    private $temperature;
    private $origine;
    private $ensoleillement;
    private $couleurs = array();


    public function getPrix($prix) {
        if ($prix < 0 || empty($prix)) {
            echo "Le prix ne peut pas être négatif ou vide.";
            die;
        } else {
            return $this->prix = $prix;
        }
    }

    public function affichePrix() {
        return $this->prix;
    }

    public function getImage($image){
        if (empty($image)) {
            return "L'image n'existe pas ou est mal indentée.";
            die;
        } else {
            return $this->image = $image;
        }
    }

    public function afficheImage() {
        return $this->image;
    }

    public function getNom($nom) {
        if (empty($nom)) {
            echo "Le nom ne peut pas être vide.";
            die;
        } else {
            return $this->nom = $nom;
        }
    }

    public function afficheNom() {
        return $this->nom;
    }

    public function getTemperature($temperature) {
        if (empty($temperature)) {
            echo "La température ne peut pas être vide.";
            die;
        } else {
            return $this->temperature = $temperature;
        }
    }

    public function afficheTemperature() {
        return $this->temperature;
    }
    
    public function setOrigine($o) {
        if (!$o || !$o->afficheNom()) {
            echo "L'origine de la fleur est obligatoire.";
            return false;
        }
        $this->origine = $o; 
        return true;
    }
    public function getOrigine() { 
        return $this->origine; 
    }

    public function setEnsoleillement($e) {
        if (!$e || !$e->afficheLibelle()) {
            echo "L'ensoleillement de la fleur est obligatoire.";
            return false;
        }
        $this->ensoleillement = $e; 
        return true;
    }

    public function getEnsoleillement() { 
        return $this->ensoleillement; 
    }

    public function addCouleur($c) {
        if (!$c || !$c->afficheCouleur()) {
            echo "La couleur fournie est invalide.";
            return false;
        }
        foreach ($this->couleurs as $x) {
            if ($x->afficheCouleur() === $c->afficheCouleur()) {
                echo "La couleur est déjà présente, pas besoin d'une autre couleur.";
                return false;
            }
        }
        $this->couleurs[] = $c; 
        return true;
    }

    public function getCouleurs() { 
        return $this->couleurs; 
    }

    public function verifierObligatoires() {
        $ok = true;
        if (!$this->origine){ 
            echo "L'origine de la fleur est manquante."; 
            $ok = false; 
        }
        if (!$this->ensoleillement){ 
            echo "L'ensoleillement de la fleur est manquante."; 
            $ok = false; 
        }
        if (count($this->couleurs) < 1){ 
            echo "Il doit y avoir au moins une couleur d'obligatoire pour la fleur."; 
            $ok = false; 
        }
        return $ok;
    }
}
?>