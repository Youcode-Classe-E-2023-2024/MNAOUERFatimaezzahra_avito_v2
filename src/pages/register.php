<?php
include("../includes/config.php");
session_start();


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $role = $_POST['role'];

    $select = "SELECT * FROM acteur WHERE acteurEmail = '$email'";
    $result = mysqli_query($db, $select);

    if (mysqli_num_rows($result) > 0) {
        $msg[] = 'Email déjà utilisé';
    } else {

        $insert = "INSERT INTO acteur (acteurNom,acteurEmail,acteurPassword,acteurTel,acteurRole) VALUES ('$nom','$email','$password','$tel','annonceur')";
        mysqli_query($db, $insert);
        $_SESSION['acteurNom'] = $nom;
        $_SESSION['acteurId'] = mysqli_insert_id($db);
        $_SESSION['acteurEmail'] = $email;
        $_SESSION['acteurTel'] = $tel;
        $_SESSION['acteurRole'] = $role;
        if ($role == 'admin') {
            $_SESSION['admin'] = $role;
            header('location:adminpage.php');
            exit;
        } elseif ($role == 'annonceur') {
            $_SESSION['annonceur'] = $role;
            header('location:../../index.php');
            exit;
        } else {
            $_SESSION['utilisateur'] = $role;
            header('location:../../index.php');
            exit;
        }
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
        <form class="w-50 mx-auto border border-primary p-4 pb-0 rounded" method="post">

            <?php if (isset($msg)) {
                foreach ($msg as $error) {
                    echo '<div class="mb-1 alert alert-danger">';
                    echo $error;
                    echo '</div>';
                }
            }
            ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="name" name="nom">
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="example@exm.com" name="email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="***********" name="password">
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Tél</label>
                <input type="text" class="form-control" id="phone" placeholder="06xxxxxxxx" name="tel">
            </div>
            <div class="mb-3">
                <label for="inputState" class="form-label">Type</label>
                <select id="inputState" class="form-select" name="role" required>
                    <option selected="" hidden disabled>Choix...</option>
                    <option value="utilisateur">Utilisateur</option>
                    <option value="announceur">Annonceur</option>
                </select>
            </div>
            <div class="mb-3">
                <a href="login.php">Vous avez déjà un compte? Se connecter</a>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
</body>

</html>