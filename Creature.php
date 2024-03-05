<?php


/**
 * Description of Créature
 *
 * @author solen
 */
class Creature {
   private $_nom;
   private $_niveau;
   private $_pointsDeVie;
   private $_force;
   private $_position;
   
   public function __construct($_nom, $_niveau, $_pointsDeVie, $_force, $_position=0) {
       $this->_nom = $_nom;
       $this->_niveau = $_niveau;
       $this->_pointsDeVie = $_pointsDeVie;
       $this->_force = $_force;
       $this->_position = $_position;
   }
   public function nom() {
       return $this->_nom;
   }

   public function niveau() {
       return $this->_niveau;
   }

   public function pointsDeVie() {
       return $this->_pointsDeVie;
   }

   public function force() {
       return $this->_force;
   }

   public function position() {
       return $this->_position;
   }

   public function setNom($nom): void {
       $this->_nom = $nom;
   }

   public function setNiveau($niveau): void {
       $this->_niveau = $niveau;
   }

   public function setPointsDeVie($pointsDeVie): void {
       $this->_pointsDeVie = $pointsDeVie;
   }

   public function setForce($force): void {
       $this->_force = $force;
   }

   public function setPosition($position): void {
       $this->_position = $position;
   }

   /**
    * Test en fonction des points de vie
    * @return type booléen, true si le nb de point de vie > 0, sinon false
    */
    public function isVivant(){
    return $this->_pointsDeVie>0;
    }

    /**
     * Calcul du nombre de points d'attaque
    * @return type entier, force*niveau si vivant, sinon 0
    */
    public function pointsAttaque() {
       return isVivant? $this-> _niveau*$this->_force:0;
    }
  
    /**
     * Ajout de nb à la position 
     * @param type $nb
     */
    public function deplacer($nb) {
        $this->setPosition($this->_position+$nb);
    }

    private function _adieux(){
        echo $this->_nom."n'est plus!";
    }
    
    private function _modifNiveau($nb){
        $niveau= ($this-> _niveau+$nb)>0 ? $this-> _niveau+$nb : 0;
        $this->setNiveau($niveau);
    }
    
    private function _faiblir($nb) {
        if ($this->isVivant()) {
            $pointsVie=$this->_pointsDeVie - $nb >0 ? $this->_pointsDeVie - $nb : 0;
            $this->setPointsDeVie($pointsVie);
            if (!$this->isVivant()) {
                $this->_adieux();
            }
        }
    }
}
