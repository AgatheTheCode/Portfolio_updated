<?php
//Include config file
include('include/twig.php');
$twig = init_twig();

include('include/config.php');
$pdo = connexion();

include('include/function.php');
$type_contenu = select_contenu($pdo);

include('include/index_data.php');
// var_dump($type_contenu);

echo $twig->render('index_template.twig', [
  'type_contenu' => $type_contenu,
  'index' => $index,
  'index_data' => $index_data,
]);
