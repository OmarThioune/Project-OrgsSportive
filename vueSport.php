<?php ob_start(); ?>
<?php foreach ($sports as $sport): ?>
    <h3><?= $sport['name']?></h3>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>