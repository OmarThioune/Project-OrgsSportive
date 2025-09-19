
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
<<<<<<< HEAD
                <li><a href="/Vue/APropos/aPropos.php">&Agrave; propos</a></li>
                <li><a href="Users">&Agrave; Connexion</a></li>
=======
                <li><a href="index.php?action=voirAPropos">&Agrave; propos</a></li>
                  <li><a href="Sport"> Connexion</a></li>
>>>>>>> b6c5a26b08338b834105c5d7d081bc03a30cd3eb
            </ul>
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
