<?php
// require les fichiers necessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';

// Controleur des sports
class ControleurSport extends Controleur {
    // Attributs privés
    private $sports;
    private $teams;

    // Constructeur
    public function __construct() {
        $this->sports = new Sports();
        $this->teams = new Teams();
    }

    // Méthode index - affiche la liste des sports
    public function index(): void {
        $sports = $this->sports->getSports();

        foreach ($sports as &$sport) {
            $sport['teams'] = $this->teams->getTeams($sport['id']);
        }

        $this->genererVue(['sports' => $sports]);
    }

    // Méthode pour afficher un sport en particulier
    public function getASport(): void {
        $idSport = $this->requete->getParametre("id");  // récupération depuis la requête
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }

    


}
