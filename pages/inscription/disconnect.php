<?php
    session_start();
    session_destroy();
    
    header("Location:../inscription/signin.php");


?>