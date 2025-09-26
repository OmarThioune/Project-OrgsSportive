
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="Contenu/SEL.css" />
    <title>Organisation sportive</title>
</head>
    
<body>
    <div id="global">

        <!-- Header -->
        <header class="site-header">
            <h1>Organisation Sportive</h1>
            <ul class="nav">
                <li><a href="APropos">&Agrave; propos</a></li>
                <li><a href="tests.php"><h3>TESTS</h3></a></li>
            </ul>
            <?php if (isset($utilisateur)) : ?>
                <h3>Bonjour <?= $utilisateur['nom'] ?>,
                    <a href="Utilisateurs/deconnecter"><small>[Se déconnecter]</small></a>
                </h3>
            <?php else : ?>
                <h3>[<a href="Utilisateurs">Se connecter</a>] <small>(admin/admin)</small></h3>
            <?php endif; ?>
        </header>

        <div id="contenu">
            <?= $contenu ?>
        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <p>Adresse : 123 Rue du Sport, Montréal, QC</p>
            <p>Téléphone : (514) 123-4567</p>
            <p>Email : contact@organisationsportive.ca</p>
        </footer>

    </div>
</body>
</html>
