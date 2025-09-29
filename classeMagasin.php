<?php
class Magasin {
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $tel;
    private $mail;
    private $horaires_ouverture;

    private $fleurs  = array();
    private $plantes = array();

    public function setNom($n){
        if (empty($n)){ 
            echo "Le nom du magasin est obligatoire."; 
            return false; 
        }
        $this->nom = $n;
    }

    public function getNom(){ 
        return $this->nom; 
    }

    public function setAdresse($a){
        if (empty($a)){ 
            echo "L'adresse est obligatoire."; 
            return false; 
        }
        $this->adresse = $a;
    }

    public function getAdresse(){ 
        return $this->adresse; 
    }

    public function setCp($c){
        if (empty($c)){ 
            echo "Le code postal est obligatoire."; 
            return false; 
        }
        $c = (string)$c;
        if (!preg_match('/^\d{5}$/', $c)){ 
            echo "Le format du code postal est invalide."; 
            return false; 
        }
        $this->cp = $c;
    }

    public function getCp(){ 
        return $this->cp; 
    }

    public function setVille($v){
        if (empty($v)){ 
            echo "La ville doit être renseignée."; 
            return false; 
        }
        $this->ville = $v;
    }

    public function getVille(){ 
        return $this->ville; 
    }

    public function setTel($t){
        if (empty($t)){ 
            echo "Le numéro de téléphone est obligatoire."; 
            return false; 
        }
        $this->tel = $t;
    }
    
    public function getTel(){
        return $this->tel; 
    }

    public function setMail($m){
        if (empty($m)){ 
            echo "L'email est obligatoire."; 
            return false; 
        }
        if (strpos($m,'@') == false){ 
            echo "Adresse mail invalide."; 
            return false; 
        }
        $this->mail = $m;
    }

    public function getMail(){ 
        return $this->mail; 
    }

    public function setHoraires($h){
        if (empty($h)){ 
            echo "Les horaires d'ouverture sont obligatoires."; 
            return false; 
        }
        $this->horaires_ouverture = $h;
    }

    public function getHoraires(){ 
        return $this->horaires_ouverture; 
    }

    public function addFleur($fleur){
        if (!$fleur){
            echo "Fleur invalide."; 
            return false; 
        }
        $this->fleurs[] = $fleur;
    }
    public function getFleurs(){ 
        return $this->fleurs; 
    }

    public function addPlante($plante){
        if (!$plante){ 
            echo "Plante invalide."; 
            return false; 
        }
        $this->plantes[] = $plante; 
    }
    public function getPlantes(){ 
        return $this->plantes; 
    }
}
