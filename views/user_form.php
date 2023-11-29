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
    <h1>User Form</h1>

    <?php if (empty($_GET['id'])) : ?>
    <form action="actions/user_add.php" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input name="username" type="text" class="form-control" placeholder="Username">
        </div>

        <div class="input-group mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>

        <select name="role" class="form-select">
            <option value="user" selected>User</option>
            <option value="admin">Admin</option>
        </select>

        <button type="submit" class="btn btn-primary btn-block my-4">Send</button>
    </form>
    <?php else : ?>
    <?php
    global $db;

    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM users WHERE users_id = '$id'");
    $user = $result->fetch_assoc();
    ?>

    <form action="actions/user_edit.php" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input name="username" type="text" class="form-control" placeholder="Username"
                   value="<?= $user['users_username'] ?>">
        </div>

        <div class="input-group mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email"
                   value="<?= $user['users_email'] ?>">
        </div>

        <?php if ($_SESSION['role'] == 'admin') : ?>
        <select name="role" class="form-select">
            <option value="user"<?php if ($user['users_role'] == 'user') echo 'selected' ?>>User</option>
            <option value="admin" <?php if ($user['users_role'] == 'admin') echo 'selected' ?>>Admin</option>
        </select>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary btn-block my-4">Send</button>
        <input type="hidden" id="userId" name="user_id" value="<?= $id ?>"/>
    </form>
    <?php endif; ?>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
