<?php
include("../includes/config.php");
session_start();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM acteur WHERE acteurEmail = '$email' && acteurPassword = '$password'";
  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['acteurNom'] = $row['acteurNom'];
    $_SESSION['acteurId'] = $row['acteurId'];
    $_SESSION['acteurEmail'] = $row['acteurEmail'];
    $_SESSION['acteurTel'] = $row['acteurTel'];
    $_SESSION['acteurRole'] = $row['acteurRole'];
    if ($row['acteurRole'] == 'admin') {
      $_SESSION['admin'] = $row['acteurRole'];
      header('location:adminpage.php');
      exit;
    } elseif ($row['acteurRole'] == 'annonceur') {
      $_SESSION['annonceur'] = $row['acteurRole'];
      header('location:../../index.php');
      exit;
    } else {
      $_SESSION['utilisateur'] = $row['acteurRole'];
      header('location:../../index.php');
      exit;
    }
  } else {
    $msg[] = 'Identifiant ou mot de passe incorrect';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("../includes/head.html");

  ?>
  <title>login</title>
</head>

<body>
  <div class="d-flex align-items-center vh-100">
    <form class="w-30 mx-auto border border-primary p-4 rounded" method="post">
      <?php if (isset($msg)) {
        foreach ($msg as $error) {
          echo '<div class="mb-1 alert alert-danger">';
          echo $error;
          echo '</div>';
        }
      }
      ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <a href="register.php">Vous n'avez pas de compte ? S'inscrire</a>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>
</body>

</html>