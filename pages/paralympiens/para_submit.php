<?php

include '../includes/connexion.php';


    if (!empty($_POST['fullName']) && !empty($_POST['dateNaiss']) && !empty($_POST['ville']) && !empty($_POST['image'])){
        try {
            $req = $dbh->prepare("INSERT INTO `paralympiens`( `fullName`, `dateNaiss`, `Ville`, `description`, `image`) VALUES (? , ? , ?, ?, ?)");

            $req->execute(array($_POST['fullName'], $_POST['dateNaiss'], $_POST['ville'], $_POST['image'], $_POST['desc']));

            header("Location:paralympiens.php");
        
        } catch (Exception $e) {
            echo $e;
        }

    } else {
        header("Location:add_para.php");
    }


?>
