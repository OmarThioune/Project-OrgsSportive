<?php

require_once 'Framework/Modele.php';

class Teams extends Modele {

    // Récupérer toutes les équipes d’un sport
    public function getTeams($idSport) {
        $sql = 'SELECT * FROM teams WHERE sport_id = ?';
        $teams = $this->executerRequete($sql, [$idSport]);
        return $teams->fetchAll();
    }

    // Récupérer une équipe par son id
    public function getATeam($id) {
        $sql = 'SELECT * FROM teams WHERE id = ?';
        $team = $this->executerRequete($sql, [$id]);
        if ($team->rowCount() == 1) {
            return $team->fetch();
        } else {
            throw new Exception("Aucune équipe ne correspond à l'identifiant '$id'");
        }
    }

    // Ajouter une équipe
    public function setTeam($team) {
        $sql = 'INSERT INTO teams (name, stadium, sport_id) VALUES (?, ?, ?)';
        return $this->executerRequete($sql, [
            $team['name'],
            $team['stadium'],
            $team['sport_id']
        ]);
    }

    // Modifier une équipe
    public function updateTeam($team) {
        $sql = 'UPDATE teams SET name = ?, stadium = ? WHERE id = ?';
        return $this->executerRequete($sql, [
            $team['name'],
            $team['stadium'],
            $team['id']
        ]);
    }

    // Supprimer une équipe
    public function deleteTeam($id) {
        $sql = 'DELETE FROM teams WHERE id = ?';
        return $this->executerRequete($sql, [$id]);
    }
}
