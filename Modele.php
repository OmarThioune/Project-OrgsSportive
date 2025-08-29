<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=organisationsportive;charset=utf8', 'root', 'mysql', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

// Renvoie la liste de tous les articles, triés par identifiant décroissant
function getSport() {
    $bdd = getBdd();
    $sports = $bdd->query('select * from sports');
    return $sports;
}

// Renvoie les informations sur un article
function getAsport($idSport) {
    $bdd = getBdd();
    $sport = $bdd->prepare('select * from sports'
            . ' where ID=?');
    $sport->execute(array($idSport));
    if ($sport->rowCount() == 1)
        return $sport->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun sport ne correspond à l'identifiant '$idSport'");
}

// Renvoie la liste des commentaires associés à un article
function getTeams($idSport) {
    $bdd = getBdd();
    $teams = $bdd->prepare('select * from teams'
            . ' where sport_id = ?');
    $teams->execute(array($idSport));
    return $teams;
}

