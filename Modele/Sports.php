<?php

require_once 'Framework/Modele.php';

class Article extends Modele {


    public function getSports() {
        $sql = 'select * from sports order by ID desc';
        $sports = $this->executerRequete($sql);
        return $sports;
    }

 
    public function getAsport($idSport) {
        $sql = 'select * from sports where ID=?';
        $sport = $this->executerRequete($sql, array($idSport));
        if ($sport->rowCount() == 1)
            return $sport->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun sport ne correspond à l'identifiant '$idSport'");
    }

    public function setSport($sport) {
        $sql = 'INSERT INTO sports (name , description) VALUES(?, ?)';
        $result = $this->executerRequete($sql, [$sport['name'] , $sport['description']]);
        return $result;
    }

    public function updateSport($sport) {
        $sql = 'UPDATE sports SET name = ?, description = ?';
        $result = $this->executerRequete($sql, [$sport['name'], $sport['description']]);
        return $result; 
    }

    public function DeleteSport($sport) {
        $sql = 'DELETE sports WHERE id = ?';
        $result = $this->executerRequete($sql, [$sport['name'], $sport['description']]);
        return $result; 
    }

}