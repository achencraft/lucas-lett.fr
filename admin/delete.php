<?php
require "../bdd.php";

$id = htmlspecialchars($_GET['id']);


    $req = $pdo->prepare('DELETE FROM portfolio WHERE ID = :i');
    $req->bindValue(':i', $id, PDO::PARAM_INT);
    if($req->execute())
    {
       header('Location: index.php');
    }
    else{
        echo "Une erreur est survenue";
    }


?>