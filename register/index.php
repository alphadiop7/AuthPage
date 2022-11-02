<?php
    require 'action_register.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>UVS | Central Authentication Service</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <header class="my-3"><h4>Central Register Service</h4></header>
      <form method="POST">
        <?php
            if (isset($successmsg)) {
              echo '<div id="successMsg" class="form-text text-success" style="position: absolute; margin-top: -20px;">' .$successmsg. '</div>';
            }
        ?>
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" id="exampleInputName1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="firstname.lastname@uvs.edu.sn" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <?php
              if (isset($errormsg)) {
                echo '<div id="errorMsg" class="form-text text-danger" style="position: absolute; margin-top: -0px;">' .$errormsg. '</div>';
              }
          ?>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="password" id="exampleInputPassword1" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary form-control">Sing Up</button>
            <a href="http://localhost/login_form_uvs/" class="form-text">login</a>
      </form>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>