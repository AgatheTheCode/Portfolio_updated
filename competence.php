<?php
// Récupère les données GET sur l'URL
if (isset($_GET['id'])) $id = $_GET['id']; else $id = 0;

// Convertit l'identifiant en entier
$id = intval($id);
//Include config file
include('include/twig.php');
$twig = init_twig();

include('include/config.php');
$pdo = connexion();

include('include/function.php');
$competence = select_type_contenu($pdo,$id);
$titre_contenu = select_titre_contenu($pdo,$id);
$nomspe_type_contenu =select_nomspe($pdo,$id);
$type_contenu = select_contenu($pdo);


include('include/index_data.php');

echo $twig->render('competence_template.twig', [
  'nomspe_type_contenu' => $nomspe_type_contenu,
  'titre' => $titre_contenu,
  'competence' => $competence,
  'index' => $index,
  'type_contenu' => $type_contenu,
]);