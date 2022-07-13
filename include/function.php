<?php

function select_contenu($pdo){
        // construction de la requête
        $sql = 'select * from type_contenu';

        // exécution de la requête
        $query = $pdo->prepare($sql);
    
        $query->execute();
    
        if ($query->errorCode() == '00000') {
            // récupération des données dans un tableau
            $tableau = $query->fetchAll(PDO::FETCH_OBJ);
        } else {
            echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
            $tableau = null;
        }
    
        return $tableau;
}
function select_type_contenu($pdo,$id){
            // construction de la requête
            $sql = 'SELECT *,type_contenu.id_type_contenu FROM contenu INNER JOIN type_contenu ON type_contenu.id_type_contenu = contenu.id_type_contenu  where type_contenu.id_type_contenu =:id ORDER BY date_contenu DESC';

            // exécution de la requête
            $query = $pdo->prepare($sql);
            $query->bindValue(':id',$id,PDO::PARAM_INT);
        
            $query->execute();
        
            if ($query->errorCode() == '00000') {
                // récupération des données dans un tableau
                $tableau = $query->fetchAll(PDO::FETCH_OBJ);
            } else {
                echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
                $tableau = null;
            }
        
            return $tableau;
}
function select_titre_contenu($pdo,$id){
    $sql = 'SELECT nom_type_contenu, nomspe_type_contenu from type_contenu Where id_type_contenu = :id';

    // exécution de la requête
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);

    $query->execute();

    if ($query->errorCode() == '00000') {
        // récupération des données dans un tableau
        $tableau = $query->fetchAll(PDO::FETCH_OBJ);
    } else {
        echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
        $tableau = null;
    }

    return $tableau;
}
function select_commentaire($pdo){

          // construction de la requête
    $sql = 'select * from commentaire';

    // exécution de la requête
    $query = $pdo->prepare($sql);

    $query->execute();

    if ($query->errorCode() == '00000') {
        // récupération des données dans un tableau
        $tableau = $query->fetchAll(PDO::FETCH_OBJ);
    } else {
        echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
        $tableau = null;
    }

    return $tableau;        // construction de la requête
    $sql = 'select * from produit';

    // exécution de la requête
    $query = $pdo->prepare($sql);

    $query->execute();

    if ($query->errorCode() == '00000') {
        // récupération des données dans un tableau
        $tableau = $query->fetchAll(PDO::FETCH_OBJ);
    } else {
        echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
        $tableau = null;
    }

    return $tableau;
}
function select_nomspe($pdo,$id){
    // construction de la requête
    $sql = 'SELECT * FROM type_contenu  where id_type_contenu =:id';

    // exécution de la requête
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);

    $query->execute();

    if ($query->errorCode() == '00000') {
        // récupération des données dans un tableau
        $tableau = $query->fetchAll(PDO::FETCH_OBJ);
    } else {
        echo '<p>Erreur dans la requête : ' . $query->errorInfo()[2] . '</p>';
        $tableau = null;
    }

    return $tableau;
}