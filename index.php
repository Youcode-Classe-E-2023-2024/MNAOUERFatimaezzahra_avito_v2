<?php
include("src/includes/config.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("src/includes/head.html");
    ?>
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <?php if (isset($_SESSION['admin']) || isset($_SESSION['annonceur']) || isset($_SESSION['utilisateur'])) : ?>
                <a href="#"><?php echo $_SESSION['acteurNom']; ?></a><br>
                <a href="src/pages/logout.php" class="ms-2">Log out</a>
            <?php else : ?>
                <div>
                    <a href="src/pages/login.php">Log in</a>
                    <a href="src/pages/register.php">Register</a>
                </div>
            <?php endif ?>
        </div>
    </nav>

    <?php
    if(isset($_SESSION['acteurNom'])){
    echo $_SESSION['acteurId'];
    echo $_SESSION['acteurNom'];
    echo $_SESSION['acteurEmail'];
    echo $_SESSION['acteurTel'];
    echo $_SESSION['acteurRole'];
}
    ?>
</body>

</html>