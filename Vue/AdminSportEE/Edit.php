<?php $this->titre = 'Modifier un sport'; ?>

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="Contenu/SEL.css" />
    <title>Organisation sportive</title>
</head>

<h2>Modifier le sport : <?= htmlspecialchars($sport['name']) ?></h2>

<form method="post" action="Sport/EditSport/<?= $sport['id'] ?>" class="form-sport">
    <input type="hidden" name="id" value="<?= $sport['id'] ?>">

    <label for="name">Nom du sport :</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($sport['name']) ?>" required>

    <label for="description">Description :</label>
    <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($sport['description']) ?></textarea>

    <button type="submit" class="btn valider">Mettre à jour</button>
    <a href="Sport" class="btn retour">Annuler</a>
</form>
