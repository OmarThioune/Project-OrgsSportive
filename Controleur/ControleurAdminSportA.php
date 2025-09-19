<?php
// require les fichiers necessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';
require_once 'Controleur/ControleurAdmin.php';

// Controleur des sports
class ControleurAdminSportA extends ControleurAdmin {
    // Attributs privés
    private $sports;
    private $teams;

    // Constructeur
    public function __construct() {
        $this->sports = new Sports();
        $this->teams = new Teams();
    }

    // Méthode pour afficher les équipes d'un sport en particulier
    public function setSport(): void {
        $this->genererVue();
    }    


}
