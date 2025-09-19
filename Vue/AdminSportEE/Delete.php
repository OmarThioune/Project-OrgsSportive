<?php $this->titre = 'Supprimer un sport'; ?>

<h2>Suppression d’un sport</h2>

<p>Voulez-vous vraiment supprimer le sport <strong><?= htmlspecialchars($sport['name']) ?></strong> ?</p>

<form method="post" action="Sport/DeleteSport/<?= $sport['id'] ?>" class="form-sport">
    <input type="hidden" name="id" value="<?= $sport['id'] ?>">

    <button type="submit" class="btn supprimer">Oui, supprimer</button>
    <a href="Sport" class="btn retour">Non, annuler</a>
</form>
