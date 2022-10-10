<?php
session_start();
if(!empty($_SESSION['user'])) {
  header("Location:../paralympiens/paralympiens.php");
}
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
    <link rel="stylesheet" href="../../css/footer/footer.css">
    <link rel="stylesheet" href="../../css/inscription/signin.css">
  </head>
  <body>
    <?php include '../includes/navbar.php'; ?>

   


  <section>
    <div class="container login-anim">
      <div class="user signinBx">
        <div class="imgBx"><img src="../../images/inscription/2.jpg" alt="" /></div>
        <div class="formBx">
          <form action="./login_submit.php" method="POST">
            <h2>Identification</h2>
            <input type="text" name="email" id="email" placeholder="Adresse e-mail" />
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
            <button type="submit" class="btn mt-4"> S'identifier</button>
            <p class="signup">
            Vous n'avez pas de compte?
              <a class="pnter" onclick="toggleForm();">S'inscrire</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="./inscri_submit.php" method="POST" >
            <h2>Inscription</h2>
            <input type="text" name="fullName" id="fullName" placeholder="Nom et prénom"  required/>
            <input type="email" name="email" id="email" placeholder="Adresse e-mail" required />
            <input type="text" name="country" id="country" placeholder="pays" required />
            <select name="role" id="role" required>
                <option value="Athlete">Athlete</option>
                <option value="Coach">Coach</option>
                <option value="Team Leader">Team Leader</option>
                <option value="NPC Staff">NPC Staff</option>
                <option value="Medical">Medical</option>
                <option value="Media">Media</option>
                <option value="ITO">ITO</option>
                <option value="Classifier">Classifier</option>
                <option value="IPC">IPC</option>
            </select>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required />
            <button type="submit" class="btn mt-4" >S'inscrire</button>
            <p class="signup">
                Vous avez déjà un compte ?
              <a class="pnter" onclick="toggleForm();">S'identifier</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="../../images/inscription/4.jpg" alt="" /></div>
      </div>
    </div>
  </section>




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

    <script src="../../js/inscription/signin.js"></script>
  </body>
</html>
