<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/header.php' ?>

    <!-- Custom styles for this template -->
    <link href="assets/css/offcanvas.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include_once 'includes/navbar.php' ?>

<main class="container">
    <h1>Profile</h1>

    <?php
    global $db;

    $id = $_SESSION['user_id'];
    $result = $db->query("SELECT * FROM users WHERE users_id = '$id'");
    $user = $result->fetch_assoc();
    ?>

    <div class="d-flex justify-content-center">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" alt="avatar"
                     class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">@<?= $user['users_username'] ?></h5>
                <p class="text-muted mb-1"><?= $user['users_role'] ?></p>
                <p class="text-muted mb-4"><?= $user['users_email'] ?></p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="index.php?page=user_form&id=<?= $user['users_id'] ?>" type="button" class="btn btn-primary">Edit</a>
                    <a href="actions/user_delete.php?id=<?= $user['users_id'] ?>" type="button" class="btn btn-outline-danger ms-1">Delete</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
