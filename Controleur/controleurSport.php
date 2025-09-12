<?php
// require les fichiers necessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';
//Controleur des sports
class ControleurSport extends Controleur{
    //attributs prives
    private $sports;
    private $teams;
    //constructeur
    public function __construct(){
        $this->sports = new Sports();
        $this->teams = new Teams();
    }
    //methode index
    // affiche la liste des sports
    public function index(): void{
        $sports = $this->sports->getSports();
        $this->genererVue(['sports' => $sports]);
    }
    //methode pour afficher un sport en particulier
    public function getASport($idSport): void{
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }
    //methode pour afficher les equipes d'un sport en particulier
    public function setSport(): void{
        $this->genererVue();
    }    
    //methode pour afficher le formulaire de creation d'un nouveau sport
    public function modifierSport($idSport): void{
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }
    //methode pour effacer un sport
    public function deleteSport($idSport): void{
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }
}
