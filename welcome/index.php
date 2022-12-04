<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="fr">

<head>
  <title>Welcome</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container my-5">
        <?php echo "<h1>Bienvenue " . $_SESSION['username'] . "</h1>"; ?>
        <a href="../logout/">Se déconnecter</a>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>