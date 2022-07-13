<?php

function connexion()
{
  $pdo = new PDO('mysql:host=localhost:3306;dbname=dufourj_portfolio;charset=utf8', 'AgatheTheAdmin2', 'Agathe_@23');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  if ($pdo) {
    return $pdo;
  } 
  else {
    echo '<p>Erreur de connexion</p>';
    exit;
  }
}