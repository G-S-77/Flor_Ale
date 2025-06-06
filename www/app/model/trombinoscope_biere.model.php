<?php

/**
 *
 *
 * @return array
 */
function getAllBeer(): array
{
    $pdo = getDatabaseConnexion();
    $sql = 'SELECT * FROM produits';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute();
    return $stmt->fetchAll();
}

/**
 * 
 *
 * @param int $id
 * @return array|false
 */
function getBeerById(int $id)
{
    $pdo = getDatabaseConnexion();
    $sql = 'SELECT * FROM produits WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}