<?php

require_once 'Modele/Sports.php';

$tstSports = new Sports();
$articles = $tstSports->getSports();
echo '<h3>Test getSports : </h3>';
var_dump($articles);

echo '<h3>Test getASport : </h3>';
$article =  $tstSports->getASport(1);
var_dump($article);