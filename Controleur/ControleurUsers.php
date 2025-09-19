<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/User.php';

/**
 * Contrôleur gérant la connexion au site
 *
 * @author Baptiste Pesquet
 */
class ControleurUsers extends Controleur {

    private $utilisateur;

    public function __construct() {
        $this->utilisateur = new User();
    }

    public function index() {
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['erreur' => $erreur]);
    }

    public function connecter() {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->utilisateur->connecter($login, $mdp)) {
                $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);
                $this->requete->getSession()->setAttribut("user", $utilisateur);
                // Éliminer un code d'erreur éventuel
                if ($this->requete->getSession()->existeAttribut('erreur')) {
                    $this->requete->getsession()->setAttribut('erreur', '');
                }
                $this->rediriger("AdminSportEE/index");
            } else {
                $this->requete->getSession()->setAttribut('erreur', 'mdp');
                $this->rediriger('Users');
            }
        } else
            throw new Exception("Action impossible : login ou mot de passe non défini");
    }

    public function deconnecter() {
        $this->requete->getSession()->detruire();
        $this->rediriger("");
    }

}
