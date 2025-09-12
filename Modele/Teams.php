<?php

require_once 'Framework/Modele.php';

class Teams extends Modele {


    public function getTeams() {
        $sql = 'select * from teamss order by ID desc';
        $teams = $this->executerRequete($sql);
        return $sports;
    }

 
    public function getAteam($idTeams) {
        $sql = 'select * from teams where ID=?';
        $teams = $this->executerRequete($sql, array($idTeams));
        if ($teams->rowCount() == 1)
            return $teams->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun équipe ne correspond à l'identifiant '$idTeams'");
    }

    public function setTeams($teams) {
        $sql = 'INSERT INTO teams (name , stadium) VALUES(?, ?)';
        $result = $this->executerRequete($sql, [$teams['name'] , $teams['stadium']]);
        return $result;
    }

    public function updateTeams($teams) {
        $sql = 'UPDATE teams SET name = ?, stadium = ?';
        $result = $this->executerRequete($sql, [$teams['name'], $teams['stadium']]);
        return $result; 
    }

    public function DeleteTeams($teams) {
        $sql = 'DELETE teams WHERE id = ?';
        $result = $this->executerRequete($sql, [$teams['name'], $teams['stadium']]);
        return $result; 
    }

}