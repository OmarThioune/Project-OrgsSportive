<?php

require 'Modele/Modele.php';

//Affiche toutes les sports
function getSport(): void
{
    $sports = getSport();
    require 'vueSport.php';
}
//Affiche un Sport en particulier
function getASport($id): void
{
    $sport = getASport(idSport: $id);
    require 'vueSport.php';
}
function setSports(array $sports): void
{
    $sports = getSport();
    require 'vueSport.php';
}
function updateSport($id, $name, $description): void
{
    $sport = updateSport(idSport: $id, name: $name, description: $description);
    require 'vueSport.php';
}
function DeleteSport($id): void
{
    $sport = DeleteSport(idSport: $id);
    require 'vueSport.php';
}


