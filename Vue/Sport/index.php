
<?php $this->titre = 'Organisme de sport'; ?>


<a href="Sport/CreateSport">
    <h2 class="flash">Ajouter un nouveau sport</h2>
</a>
<?php foreach ($sports as $sport):
    ?>

    <article>
        <header>
            <a href="Sport/ShowSport/<?= $sport['id'] ?>">
                <h1 class="titreArticle"><?= $sport['name'] ?></h1>
            </a>
        </header>
        <p><?= $sport['description'] ?><br/>
            <a href="Sport/EditSport/<?= $sport['id'] ?>"> [modifier le sport]</a>
        </p>
    </article>
    <hr />
<?php endforeach; ?>    
