<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] == 'modeleSports') {
        require 'Tests/TestSports.php';
    } else if ($_GET['test'] == 'modeleTeams') {
        require 'Tests/TestTeams.php';
    } else if ($_GET['test'] == 'vueSports') {
        require 'Tests/TestVueSports.php';
    }  else {
        echo '<h3>Test inexistant!!!</h3>';
    }
}
?>
<h3>Tests d'organisation Sportives</h3>
<ul>
    <li>
        <a href="tests.php?test=modeleSports">Modèle Sports</a>
    </li>
    <li>
        <a href="tests.php?test=modeleTeams">Modèle Teams</a>
    </li>
    <li>
        <a href="tests.php?test=vueSports">Vue Sports</a>
    </li>
</ul>

