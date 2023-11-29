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
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Recent posts</h6>

        <?php
        $result = $db->query("SELECT * FROM posts LIMIT 5;");
        $posts = $result->fetch_all(1);
        ?>

        <?php foreach ($posts as $post) : ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"/>
                    <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark"><?= $post['posts_title'] ?></strong>
                    <?= $post['posts_description'] ?>
                </p>
            </div>
        <?php endforeach ?>

        <small class="d-block text-end mt-3">
            <a href="index.php?page=post">All posts</a>
        </small>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Recent users</h6>
        <?php
        $result = $db->query("SELECT * FROM users LIMIT 5;");
        $users = $result->fetch_all(1);
        ?>

        <?php foreach ($users as $user) : ?>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"/>
                    <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark"><?= $user['users_email'] ?></strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@<?= $user['users_username'] ?></span>
                </div>
            </div>
        <?php endforeach ?>

        <small class="d-block text-end mt-3">
            <a href="index.php?page=user">All users</a>
        </small>
    </div>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
