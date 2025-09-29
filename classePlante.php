<?php
class Plante {
    private $nom;
    private $prix;
    private $image;
    private $temperature;
    private $origine;
    private $ensoleillement;

    public function setNom($nom){
        if (empty($nom)){ 
            echo "Le nom de la plante doit être renseigné.";
             return false; 
            }
        $this->nom = $nom; 
    }

    public function getNom(){ 
        return $this->nom; 
    }

    public function setPrix($prix){
        if (empty($prix) || $prix < 0){ 
            echo "Le prix de la plante doit être positif et donné."; 
            return false; 
        }
        $this->prix = (float)$prix;
    }
    public function getPrix(){ 
        return $this->prix; 
    }

    public function setImage($image){
        if (empty($image)){ 
            echo "L'image de la plante est obligatoire."; 
            return false; 
        }
        $this->image = $image;
    }
    public function getImage(){ 
        return $this->image; 
    }

    public function setTemperature($t){
        if (empty($t)){ 
            echo "La température de la plante doit être donné."; 
            return false; 
        }
        $this->temperature = $t;
    }
    public function getTemperature(){ 
        return $this->temperature; 
    }

    public function setOrigine($o){
        if (!$o || !$o->afficheNom()){ 
            echo "L'origine de la plante est obligatoire.";
            return false; }
        $this->origine = $o; 
    }
    public function getOrigine(){ 
        return $this->origine; 
    }

    public function setEnsoleillement($e){
        if (!$e || !$e->afficheLibelle()){ 
            echo "L'ensoleillement de la plante est obligatoire."; 
            return false; }
        $this->ensoleillement = $e;
    }
    public function getEnsoleillement(){ 
        return $this->ensoleillement; 
    }

    public function verifierObligatoires(){
        $ok = true;
        if (!$this->origine){ 
            echo "L'origine est manquante pour la plante."; 
            $ok=false; 
        }
        if (!$this->ensoleillement){ 
            echo "L'ensoleillement est manquant pour la plante."; 
            $ok=false; 
        }
        return $ok;
    }
}
