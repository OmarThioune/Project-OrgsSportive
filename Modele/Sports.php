<?php
require_once 'Framework/Modele.php';

class Sports extends Modele {



public function getSports() {
    $sql = 'SELECT * FROM sports ORDER BY id DESC';
    $sports = $this->executerRequete($sql);
    return $sports->fetchAll(PDO::FETCH_ASSOC);  // ✅ tableau associatif
}

    // Récupère un sport par son ID
    public function getASport($idSport) {
        $sql = 'SELECT * FROM sports WHERE id=?';
        $sport = $this->executerRequete($sql, [$idSport]);
        if ($sport->rowCount() == 1)
            return $sport->fetch();
        else
            throw new Exception("Aucun sport ne correspond à l'identifiant '$idSport'");
    }

    // Insère un nouveau sport
    public function setSport($sport) {
        $sql = 'INSERT INTO sports (name, description) VALUES(?, ?)';
        return $this->executerRequete($sql, [$sport['name'], $sport['description']]);
    }

    // Met à jour un sport
    public function updateSport($sport) {
        $sql = 'UPDATE sports SET name = ?, description = ? WHERE id = ?';
        return $this->executerRequete($sql, [$sport['name'], $sport['description'], $sport['id']]);
    }

    // Supprime un sport
    public function deleteSport($id) {
        $sql = 'DELETE FROM sports WHERE id = ?';
        return $this->executerRequete($sql, [$id]);
    }
}
