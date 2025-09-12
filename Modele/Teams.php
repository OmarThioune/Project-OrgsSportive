<?php

require_once 'Framework/Modele.php';

class Teams extends Modele {


    public function getTeams($idTeams = null) {
        if ($idTeams) {
            $sql = 'select * from teams' ;
            $teams = $this->executerRequete($sql);
        } else {
            $sql = 'select * from teams'
                    . ' where sport_id = ?';
            $teams = $this->executerRequete($sql , [$idTeams]);
        }
        return $teams;
    }

 
    public function getTeam($id) {
        $sql = 'select * from teams'
                . ' where id = ?';
        $team = $this->executerRequete($sql, [$id]);
        if ($team->rowCount() == 1) {
            return $team->fetch();  // Accès à la première ligne de résultat
        } else {
            throw new Exception("Aucun équipe ne correspond à l'identifiant '$id'");
        }
    }

    public function setTeams($teams) {
        $sql = 'INSERT INTO teams (name , stadium , sports_id) VALUES(?, ? , ?)';
        $result = $this->executerRequete($sql, [$teams['name'] , $teams['stadium'] , $teams['sports_id']]);
        return $result;
    }

    public function updateTeams($teams) {
        $sql = 'UPDATE teams SET name = ?, stadium = ?';
        $result = $this->executerRequete($sql, [$teams['name'], $teams['stadium']]);
        return $result; 
    }

    public function DeleteTeams($teams) {
        $sql = 'DELETE teams WHERE id = ?';
        $result = $this->executerRequete($sql, [$id]);
        return $result; 
    }

}