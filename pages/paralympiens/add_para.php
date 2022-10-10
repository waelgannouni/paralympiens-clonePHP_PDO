<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPC Tunisie</title>
    
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="../../addons/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="../../css/navbar/navbar.css" rel="stylesheet" />
    <link href="../../css/paralympiens/para_form.css" rel="stylesheet" />
</head>
<body>
    <?php
    include '../includes/navbar.php';
    include '../includes/connexion.php';
    ?>


    <div class="container">
        <form action="./para_submit.php" method="POST">
            
        <h2>Informations</h2>
        <hr />
        <div class="form-group">
            <label for="fullName">Nom et Prénom</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Entrer le nom et le prénom de l'athlète">
        </div>
        <div class="form-group">
            <label for="dateNaiss">Date de naissance</label>
            <input type="date" class="form-control" id="dateNaiss" name="dateNaiss">
        </div>

        <div class="form-group">
            <label for="ville">Ville de naissance</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Entrer la ville de naissance de l'athlète">
        </div>
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="image">Les Réalisations</label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" placeholder="Entrer les réalisations de l'athlète"></textarea>
        </div>

        

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>


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