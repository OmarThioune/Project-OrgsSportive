<?php
// Inclusion des fichiers nécessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';

// Contrôleur des sports
class ControleurSport extends Controleur {
    // Attributs privés
    private $sports;
    private  $teams;

    // Constructeur
    public function __construct() {
        $this->sports = new Sports();
        $this->teams = new Teams();
    }

    // Action par défaut : liste des sports
    public function index(): void {
        $listeSports = $this->sports->getSports();

        // Ajouter les équipes associées à chaque sport
        foreach ($listeSports as $key => $sport) {
            $listeSports[$key]['teams'] = $this->teams->getTeams($sport['id']);
        }

        $this->genererVue([
            'sports' => $listeSports
        ]);
    }

    // Action : afficher un sport précis
    public function getASport(): void {
        $id = (int) $this->requete->getParametre("id");
        $unSport = $this->sports->getASport($id);

        $this->genererVue([
            'sport' => $unSport
        ]);
    }
}
