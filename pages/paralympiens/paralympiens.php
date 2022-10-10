<?php
session_start();
include '../includes/connexion.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="../../addons/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="../../css/navbar/navbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/paralympiens/title.css" />
    <link rel="stylesheet" href="../../css/paralympiens/search.css" />
    <link rel="stylesheet" href="../../css/paralympiens/elements.css" />
    <link rel="stylesheet" href="../../css/footer/footer.css">
  </head>
  <body>
    <?php include '../includes/navbar.php'; ?>

    <div class="Paralympiens-title">
      <div class="container">
        <div class="para-links">
          <a href="#">Accueil</a> > <a href="#">Paralympiens</a>
        </div>
        <h1 class="title">Paralympiens</h1>
      </div>
    </div>

    <form class="para-search container my-5 p-5" action="#" method="GET">
      <label for="para-search-input">Rechercher un athlète</label>

      <div class="w-100">
        <input
          type="text"
          name="para-search-input"
          id="para-search-input"
          placeholder="Rechercher par nom"
        />
        <button type="submit" class="btn">
          <i class="fas fa-search"></i>&nbsp;&nbsp;&nbsp; RECHERCHER
        </button>
      </div>
    </form>


    <div class="container para-content"> 
        <?php     
        foreach (range('A', 'Z') as $letter){
            $sql = $dbh->query("SELECT `id` FROM `paralympiens` WHERE LEFT(`fullName`,1) = '$letter';");
            $sqlFetch = $dbh->query("SELECT `fullName`,  `image` FROM `paralympiens` WHERE LEFT(`fullName`,1) = '$letter';");
            
            if($sql->fetchColumn() > 0){
                echo "<h1>$letter</h1> <hr class='w-100'/> <br />";   
                foreach($sqlFetch as $row ) {
                    echo '
                    <a class="para-element m-4" href="#">
                        <div class="element-img-container">
                            <img src="../../images/paralympiens/Abbes-Saidi.jpg" alt="' . $row['fullName'] . '" />
                        </div>
                        <h4>' . $row['fullName'] . ' </h4>
                    </a>'
                     ;
                }
                
            }
            } 
            
            
        ?>
    </div>


    <?php include '../includes/footer.php';?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
