<?php

require_once 'Modele/Teams.php';

$tstSports = new Teams();
$articles = $tstSports->getTeams();
echo '<h3>Test getTeams : </h3>';
var_dump($articles);

echo '<h3>Test getATeam : </h3>';
$article =  $tstSports-> getATeam(1);
var_dump($article);