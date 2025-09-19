<?php
// require les fichiers necessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';
//Controleur des sports
class ControleurTeams extends Controleur{
    //attributs prives
    private $sports;
    private $teams;
    //constructeur
    public function __construct(){
        $this->sports = new Sports();
        $this->teams = new Teams();
    }
    //methode index
    // affiche la liste des equipes
    public function index(): void{
        $teams = $this->teams->getTeams();
        $this->genererVue(['teams' => $teams]);
    }
    //methode pour afficher une equipe en particulier
    public function getATeam($idTeam): void{
        $team = $this->teams->getATeam($idTeam);
        $this->genererVue(['team' => $team]);
    }
    //methode pour afficher les equipes d'un sport en particulier
    public function setTeam(): void{
        $this->genererVue();
    }    
    //methode pour afficher le formulaire de creation d'un nouveau sport
    public function updateTeams($idTeam): void{
        $team = $this->teams->getATeam($idTeam);
        $this->genererVue(['team' => $team]);
    }
    //methode pour effacer une equipe
    public function deleteTeam($idTeam): void{
        $team = $this->teams->getATeam($idTeam);
        $this->genererVue(['team' => $team]);
    }
}
