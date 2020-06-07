<?php
require "../bdd.php";

$nom = htmlspecialchars($_POST['NOM']);
$type = htmlspecialchars($_POST['TYPE']);
$apercu = htmlspecialchars($_POST['APERCU']);
$nbr = htmlspecialchars($_POST['NBR']);
$desc = htmlspecialchars($_POST['DESCRIPTION']);
$liens = htmlspecialchars($_POST['LIENS']);



    $req = $pdo->prepare('INSERT INTO portfolio (NOM, TYPE, APERCU, DESCRIPTION, NOMBRE_IMAGE, LIENS) VALUES (:n,:t,:a,:d,:b,:l)');
    $req->bindValue(':n', $nom, PDO::PARAM_STR);
    $req->bindValue(':t', $type, PDO::PARAM_STR);
    $req->bindValue(':a', $apercu, PDO::PARAM_STR);
    $req->bindValue(':d', $desc, PDO::PARAM_STR);
    $req->bindValue(':b', $nbr, PDO::PARAM_INT);
    $req->bindValue(':l', $liens, PDO::PARAM_STR);
    if($req->execute())
    {
        $last_id = $pdo->lastInsertId();
        $path = "../images/portfolio/$last_id";
        mkdir($path);
        chown ( $path , "lucas-lett" ) ;
        header('Location: ../projet.php?id='.$id);
    }
    else{
        echo "Une erreur est survenue";
    }


?>