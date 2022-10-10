<?php
session_start();

include '../includes/connexion.php';


    if (!empty($_POST['email']) && !empty($_POST['mdp']) ){
        try {
           $req = $dbh->prepare("SELECT `email`,  `mdp` FROM `user` WHERE `email` = ?");
           $req->execute([$_POST['email']]);

           $row = $req->fetch(PDO::FETCH_ASSOC);

            if ($req->rowCount() > 0) {
                if($_POST['email'] == $row["email"]) {
                    if(password_verify($_POST['mdp'], $row['mdp'])) {
                        $_SESSION['user'] = $row['email'];
                        header("Location:../paralympiens/paralympiens.php");
                    }
                }
            }

        } catch (Exception $e) {
            header("Location:./signin.php");
        }

    } else {
        header("Location:./signin.php");
    }


?>
