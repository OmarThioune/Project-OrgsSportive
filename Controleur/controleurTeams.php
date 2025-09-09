<?php

require 'Modele/Modele.php';

//Affiche les equipe du sport choisi
function getTeams($id): void
{
    $teams = getTeams(idSport: $id);
    require 'vueTeams.php';
}
function addTeams($id)
/*
//Affiche les equipes d'un sport en particulier
function getTeamsById(int $id): array
{
    return getTeams(idSport: $id);
}


//Affiche une equipe en particulier
function getTeam($id): void
{
    $team = getTeam(idTeam: $id);
    require 'vueTeam.php';
}
    */