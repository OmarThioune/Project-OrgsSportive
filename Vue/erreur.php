<?php $this->titre = 'Erreur'; ?>

<h2>Erreur</h2>

<?php if (!empty($message)): ?>
    <p style="color:red; font-weight:bold;"><?= htmlspecialchars($message) ?></p>
<?php else: ?>
    <p style="color:red; font-weight:bold;">Une erreur est survenue.</p>
<?php endif; ?>

<a href="Sport" class="btn retour">Retour à la liste des sports</a>
