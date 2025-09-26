
<?php if (!empty($sports)): ?>
    <table class="table-sports">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Équipes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($sports as $sport): ?>
            <tr>
                <td><?= htmlspecialchars($sport['name']) ?></td>
                <td><?= htmlspecialchars($sport['description']) ?></td>
                <td>
                    <?php if (!empty($sport['teams'])): ?>
                        <ul>
                            <?php foreach ($sport['teams'] as $team): ?>
                                <li>
                                    <?= htmlspecialchars($team['name']) ?> (Stade : <?= htmlspecialchars($team['stadium']) ?>)
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <em>Aucune équipe</em>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="AdminSportEE/Edit/<?= $sport['id'] ?>" class="btn modifier">Modifier</a>
                    <a href="AdminSportEE/Delete/<?= $sport['id'] ?>" 
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
