<?php $this->titre = "Détail du sport " . htmlspecialchars($sport['name']); ?>

<article>
    <header>
        <h1 class="titreArticle"><?= htmlspecialchars($sport['name']) ?></h1>
    </header>

    <p><strong>Description :</strong><br>
        <?= nl2br(htmlspecialchars($sport['description'])) ?>
    </p>

    <p>
        <a href="Sport/EditSport/<?= $sport['id'] ?>">✏️ Modifier ce sport</a> |
        <a href="Sport/DeleteSport/<?= $sport['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce sport ?');">🗑️ Supprimer</a> |
        <a href="Sport">⬅ Retour à la liste des sports</a>
    </p>
</article>
