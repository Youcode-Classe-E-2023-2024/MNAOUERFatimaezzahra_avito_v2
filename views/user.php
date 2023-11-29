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
    <div class="d-flex justify-content-between">
        <h1>Publications</h1>
        <div class="p-1">
            <a href="index.php?page=user_form" class="btn btn-primary" type="button">Create</a>
        </div>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        global $db;

        $result = $db->query("SELECT * FROM users;");
        $users = $result->fetch_all(1);
        ?>

        <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img
                                src="https://mdbootstrap.com/img/new/avatars/1.jpg"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                        />
                        <div class="ms-3">
                            <p class="fw-bold"><?= ucfirst($user['users_username']) ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal"><?= $user['users_email'] ?></p>
                </td>
                <td><?= ucfirst($user['users_role']) ?></td>
                <td>
                    <a href="index.php?page=user_form&id=<?= $user['users_id'] ?>" type="button"
                       class="btn btn-link btn-sm btn-rounded">Edit</a>
                    <a href="actions/user_delete.php?id=<?= $user['users_id'] ?>" type="button"
                       class="btn btn-link btn-sm btn-rounded text-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
