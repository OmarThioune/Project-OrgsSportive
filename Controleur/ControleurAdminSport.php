<?php
// require les fichiers necessaires
require_once 'Framework/Controleur.php';
require_once 'Modele/Teams.php';
require_once 'Modele/Sports.php';
require_once 'Controleur/ControleurAdmin.php';

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
        $this->genererVue(['sports' => $sports]);
    }

    // Méthode pour afficher un sport en particulier
    public function getASport(): void {
        $idSport = $this->requete->getParametre("id");  // récupération depuis la requête
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }

    // Méthode pour afficher les équipes d'un sport en particulier
    public function setSport(): void {
        $this->genererVue();
    }    

public function updateSport(): void {
    $idSport = $this->requete->getParametre('id');  // récupération de l'ID

    if (!$idSport) {
        // Aucun ID fourni → afficher message d'erreur
        $message = "Aucun identifiant de sport fourni pour la modification.";
        $this->genererVue(['message' => $message], 'Erreur'); // tu peux créer une vue Erreur.php
        return; // arrêter l’exécution
    }

    try {
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    } catch (Exception $e) {
        // ID fourni mais aucun sport trouvé
        $message = $e->getMessage();
        $this->genererVue(['message' => $message], 'Erreur');
    }
}



    // Méthode pour effacer un sport
    public function deleteSport(): void {
        $idSport = $this->requete->getParametre("id");  // récupération depuis la requête
        $sport = $this->sports->getASport($idSport);
        $this->genererVue(['sport' => $sport]);
    }
}
