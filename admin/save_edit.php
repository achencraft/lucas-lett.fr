<?php
require "../bdd.php";

$id = htmlspecialchars($_POST['ID']);
$nom = htmlspecialchars($_POST['NOM']);
$type = htmlspecialchars($_POST['TYPE']);
$apercu = htmlspecialchars($_POST['APERCU']);
$nbr = htmlspecialchars($_POST['NBR']);
$desc = htmlspecialchars($_POST['DESCRIPTION']);
$liens = htmlspecialchars($_POST['LIENS']);



    $req = $pdo->prepare('UPDATE portfolio SET NOM=:n, TYPE=:t, APERCU=:a, DESCRIPTION=:d, NOMBRE_IMAGE=:b, LIENS=:l WHERE ID = :i');
    $req->bindValue(':n', $nom, PDO::PARAM_STR);
    $req->bindValue(':t', $type, PDO::PARAM_STR);
    $req->bindValue(':a', $apercu, PDO::PARAM_STR);
    $req->bindValue(':d', $desc, PDO::PARAM_STR);
    $req->bindValue(':b', $nbr, PDO::PARAM_INT);
    $req->bindValue(':l', $liens, PDO::PARAM_STR);
    $req->bindValue(':i', $id, PDO::PARAM_INT);
    if($req->execute())
    {
       header('Location: index.php');
    }
    else{
        echo "Une erreur est survenue";
    }


?>