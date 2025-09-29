<?php
require_once("classeFleur.php");
require_once("classePlante.php");
require_once("classeAccessoire.php");
require_once("classeOrigine.php");
require_once("classeEnsoleillement.php");
require_once("classeCouleur.php");
require_once("classeMagasin.php");

$chili = new Origine();  
$chili->getNom("Chili");

$perou = new Origine();  
$perou->getNom("Pérou");

$plein = new Ensoleillement(); 
$plein->setLibelle("Plein soleil");

$ombre = new Ensoleillement(); 
$ombre->setLibelle("Ombrage");

$violet = new Couleur(); 
$violet->getCouleur("violet");

$noir = new Couleur(); 
$noir->getCouleur("noir");

$jaune = new Couleur();
$jaune->getCouleur("jaune");

$f1 = new Fleur();
$f1->getNom("Alstroemeria Jaune");
$f1->getPrix(4.5);
$f1->getImage("alstroemeria_jaune.png");
$f1->getTemperature("18°C");
$f1->setOrigine($chili);
$f1->setEnsoleillement($plein);
$f1->addCouleur($jaune);
$f1->verifierObligatoires();

$f2 = new Fleur();
$f2->getNom("Alstroemeria Violet");
$f2->getPrix(4.5);
$f2->getImage("alstroemeria_violet.jpg");
$f2->getTemperature("18°C");
$f2->setOrigine($perou);
$f2->setEnsoleillement($ombre);
$f2->addCouleur($violet);
$f2->addCouleur($noir);
$f2->addCouleur($violet); // doublon
$f2->verifierObligatoires();

$p1 = new Plante();
$p1->setNom("Bambou");
$p1->setPrix(11);
$p1->setImage("bambou.jpg");
$p1->setTemperature("20°C");
$p1->setOrigine($chili);
$p1->setEnsoleillement($plein);

$mag = new Magasin();
$mag->setNom("TEPLAN");
$mag->setAdresse("8 rue de la Graine");
$mag->setCp("51100");
$mag->setVille("Reims");
$mag->setTel("03.26.12.34.56");
$mag->setMail("contact@teplan.fr");
$mag->setHoraires("10h-20h");

$mag->addFleur($f1);
$mag->addFleur($f2);
$mag->addPlante($p1);

$cols=array();
foreach($f2->getCouleurs() as $c){ $cols[]=$c->afficheCouleur(); }

echo '<hr>';
echo "Origine: ".$f1->getOrigine()->afficheNom()."<br>";
echo "Couleurs: ".implode(", ", $cols)."<br>";

echo "<hr><b>Magasin: ".$mag->getNom()."</b><br>";

echo "<u>Fleurs en rayon</u><br>";
foreach ($mag->getFleurs() as $f) {
    $cols = array_map(function($c){ return $c->afficheCouleur(); }, $f->getCouleurs());
    echo "- ".$f->afficheNom()
       ." | Prix: ".$f->affichePrix()." €"
       ." | Ensoleillement: ".$f->getEnsoleillement()->afficheLibelle()
       ." | Couleur(s): ".implode(", ", $cols)."<br>"
       ." | Image: <br><img src='".$f->afficheImage()."' alt ='".$f->afficheNom()."'<br><br>";
}

echo "<u>Plantes en rayon</u><br>";
foreach ($mag->getPlantes() as $p) {
    echo "- ".$p->getNom()
       ." | Prix: ".$p->getPrix()." €"
       ." | Ensoleillement: ".$p->getEnsoleillement()->afficheLibelle()."<br>"
       ." | Image:<br> <img src='".$p->getImage()."' alt ='".$p->getNom()."'<br>";
}

?>