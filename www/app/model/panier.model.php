<?php
function getBieres() {
 $db = getDatabaseConnexion();
 $stmt = $db->prepare('SELECT * FROM produits');
 $stmt->execute();
 return $stmt->fetchAll();
 }
 
 function getBiere(int $id) {
   $pdo = getDatabaseConnexion();
   $stmt = $pdo->prepare(' SELECT * FROM produits WHERE id=:id');
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();
   return $stmt->fetch();
   }