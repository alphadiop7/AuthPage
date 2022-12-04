<?php
    require 'action_register.php';
?>
<!doctype html>
<html lang="fr">

<head>
  <title>Inscription</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <header class="my-3"><h2>Inscription</h2></header>
      <form method="POST">
        <?php
            if (isset($successmsg)) {
              echo '<div id="successMsg" class="form-text text-success" style="position: absolute; margin-top: -17px;">' .$successmsg. '</div>';
            } elseif (isset($errormsg)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -17px;">' .$errormsg. '</div>';
            }
        ?>
        <div class="mb-3">
          <label for="InputName" class="form-label">Nom d'utilisateur</label>
          <input type="text" name="username" class="form-control" placeholder="nom d'utilisateur" id="InputName" aria-describedby="emailHelp" value="<?php if (isset($username)) { echo $username; } ?>" >
          <?php
            if (isset($alertusername)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$alertusername. '</div>';
            }
          ?>
        </div>
        <div class="mb-3">
          <label for="InputEmail" class="form-label">Adresse e-mail</label>
          <input type="email" name="email" class="form-control" placeholder="prenom.nom@uvs.edu.sn" id="InputEmail" aria-describedby="emailHelp" value="<?php if (isset($email)) { echo $email; } ?>">
          <?php
            if (isset($alertemail)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -3px;">' .$alertemail. '</div>';
            } elseif (isset($alertemailformat)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -3px;">' .$alertemailformat. '</div>';
            }
          ?>
        </div>
        <div class="mb-4">
          <label for="InputPassword" class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control" placeholder="mot de passe" id="InputPassword" value="" >
          <?php
            if (isset($alertpassword)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -2px;">' .$alertpassword. '</div>';
            }
          ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary form-control">S'inscrire</button>
            <a href="../index.php" class="form-text">se connecter</a>
      </form>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>