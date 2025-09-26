<?php
// Inclusion des fichiers nécessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';

// Contrôleur des équipes
class ControleurTeams extends Controleur {
    // Attributs privés
    private $sports;
    private $teams;

    // Constructeur
    public function __construct() {
        $this->sports = new Sports();
        $this->teams = new Teams();
    }

    // Affiche la liste de toutes les équipes
    public function index(): void {
        // Remplacez 1 par l'identifiant du sport souhaité ou récupérez-le dynamiquement
        $idSport = 1;
        $listeEquipes = $this->teams->getTeams($idSport);
        $this->genererVue([
            'teams' => $listeEquipes
        ]);
    }

    // Affiche une équipe précise
    public function getATeam(int $id): void {
        $equipe = $this->teams->getATeam($id);
        $this->genererVue([
            'team' => $equipe
        ]);
    }

    // Affiche le formulaire pour créer une équipe
    public function setTeam(): void {
        $this->genererVue();
    }

    // Affiche le formulaire pour mettre à jour une équipe
    public function updateTeams(int $id): void {
        $equipe = $this->teams->getATeam($id);
        $this->genererVue([
            'team' => $equipe
        ]);
    }

    // Affiche la vue pour confirmer la suppression d’une équipe
    public function deleteTeam(int $id): void {
        $equipe = $this->teams->getATeam($id);
        $this->genererVue([
            'team' => $equipe
        ]);
    }
}
