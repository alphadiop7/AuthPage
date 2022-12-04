<?php
    require 'action_login.php';
?>
<!doctype html>
<html lang="fr">

<head>
  <title>Connection</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <header class="my-4"><h2>Connexion</h2></header>
      <form method="POST">
        <?php
            if (isset($errormsg)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -20px;">' .$errormsg. '</div>';
            }
        ?>
        <div class="mb-4">
          <label for="InputEmail" class="form-label">Adresse e-mail</label>
          <input type="email" name="email" class="form-control" placeholder="prenom.nom@uvs.edu.sn" id="InputEmail" aria-describedby="emailHelp" value="<?php if (isset($email)) { echo $email;} ?>" >
          <?php
            if (isset($alertemail)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute;">' .$alertemail. '</div>';
            } elseif (isset($alertemailformat)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute;">' .$alertemailformat. '</div>';
            }
          ?>
        </div>
        <div class="mb-5">
          <label for="InputPassword" class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control" placeholder="mot de passe" id="InputPassword" value="<?php /* if (isset($password))  { echo $password; }*/ ?>" >
          <?php
            if (isset($alertpassword)) {
              echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute;">' .$alertpassword. '</div>';
            }
          ?>
        </div>
        <button type="submit" name="submit" class="mb-4 btn btn-primary form-control">Se connecter</button>
        <a href="./register/" class="form-text">S'inscrire</a>
      </form>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>