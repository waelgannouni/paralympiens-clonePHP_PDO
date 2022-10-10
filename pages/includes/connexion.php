<?php
try {

    $dbh = new PDO('mysql:host=localhost;dbname=npc', 'root', '');
} catch (Exception $e) {
    echo 'failed to connect to database';
}
?>