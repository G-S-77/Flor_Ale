<?php

/**
 *
 * Retrourne les données de tous les étudiants depuis la base de données
 * @return array
 */
function getAllTeamMMI(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM trombinoscope_equipe");
    $stmt -> execute();
    return $stmt->fetchAll();
}

function getAllTeamGB(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM trombinoscope_gb");
    $stmt -> execute();
    return $stmt->fetchAll();
}