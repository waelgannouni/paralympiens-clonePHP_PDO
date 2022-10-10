<?php

include '../includes/connexion.php';


    if (!empty($_POST['fullName']) && !empty($_POST['email']) && !empty($_POST['country']) && !empty($_POST['role']) && !empty($_POST['mdp'])){
        try {
            
            $check = $dbh->prepare("SELECT `email` FROM `user` WHERE `email` = ?");
     
            $checkRow = $req->fetch(PDO::FETCH_ASSOC);

            if($check->rowCount() < 1) {
                // ALL FINE
                $inscri->execute(array($_POST['fullName'], $_POST['email'], $_POST['country'], $_POST['role'], password_hash($_POST['mdp'],PASSWORD_DEFAULT)));
                $_SESSION['user'] = $loginRow['email'];

                header("Location:../paralympiens/paralympiens.php");
                
            } else {
                // EMAILS EXISTS ALREADY
                header("Location:./signin.php");
            }

            
        } catch (Exception $e) {
            echo $e->getMessage();
            header("Location:./signin.php");
        }

    } else {
        // MISSED SOME INFORMATIONS
        echo 'error';
        
        header("Location:./signin.php");
    }


?>
