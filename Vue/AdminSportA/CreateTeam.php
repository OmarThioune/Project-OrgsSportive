<?php $this->titre = 'Ajouter un sport'; ?>

<h2>Ajouter un nouveau sport</h2>

<form method="post" action="Sport/CreateSport" class="form-sport">
    <label for="name">Nom du sport :</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description :</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <button type="submit" class="btn valider">Enregistrer</button>
    <a href="Sport" class="btn retour">Annuler</a>
</form>
