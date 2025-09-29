<?php
class Accessoire {
    private $nom;
    private $prix;
    private $image;

    public function setNom($n){
        if (empty($n)){
             echo "Le nom de l'accessoire est obligatoire."; 
             return false; }
        $this->nom = $n; 
    }

    public function getNom(){ 
        return $this->nom; 
    }

    public function setPrix($p){
        if (empty($p) || $p<0){ 
            echo "Le prix de l'accessoire doit être positif et non-vide."; 
            return false; }
        $this->prix = (float)$p;
    }

    public function getPrix(){ 
        return $this->prix; 
    }

    public function setImage($i){
        if ($i===''){ 
            echo "L'image de l'accessoire est nécessaire."; 
            return false; }
        $this->image = $i;
    }

    public function getImage(){ 
        return $this->image; 
    }
}
