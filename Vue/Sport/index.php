<?php $this->titre = 'Organisme de sport'; ?>

<a href="Sport/CreateSport" class="btn-ajout">
    Ajouter un nouveau sport
</a>

<?php if (!empty($sports)): ?>
    <table class="table-sports">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($sports as $sport): ?>
            <tr>
                <td><?= htmlspecialchars($sport['name']) ?></td>
                <td><?= htmlspecialchars($sport['description']) ?></td>
                <td>
                    <a href="Sport/EditSport/<?= $sport['id'] ?>" class="btn modifier">Modifier</a>
                    <a href="Sport/DeleteSport/<?= $sport['id'] ?>" 
                       class="btn supprimer"
                       onclick="return confirm('Voulez-vous vraiment supprimer le sport <?= htmlspecialchars($sport['name']) ?> ?');">
                       Supprimer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun sport trouvé.</p>
<?php endif; ?>
