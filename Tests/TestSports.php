<?php

require_once 'Modele/Sports.php';

$tstSports = new Sports();
$articles = $tstSports->getSports();
echo '<h3>Test getSports : </h3>';
var_dump($articles->rowCount());

echo '<h3>Test getAsports : </h3>';
$article =  $tstSports->getASports(1);
var_dump($article);