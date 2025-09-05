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
//Affiche les equipe du sport choisi
function getTeams($id): void
{
    $teams = getTeams(idSport: $id);
    require 'vueTeams.php';
}


