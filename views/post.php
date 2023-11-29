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
        <?php if (!empty($_SESSION['user_id'])) : ?>
            <div class="p-1">
                <a href="index.php?page=post_form" class="btn btn-primary" type="button">Create</a>
            </div>
        <?php endif; ?>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        <?php
        global $db;

        $result = $db->query("SELECT * FROM posts;");
        $posts = $result->fetch_all(1);
        ?>

        <?php foreach ($posts as $post) : ?>
            <tr>
                <td>
                    <p><?= $post['posts_title'] ?></p>
                </td>
                <td>
                    <p class="fw-normal"><?= $post['posts_description'] ?></p>
                </td>
                <td>
                    <p class="fw-normal"><?= $post['posts_create_at'] ?></p>
                </td>
                <td>
                    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post['posts_user']) : ?>
                        <a href="index.php?page=post_form&id=<?= $post['posts_id'] ?>" type="button"
                           class="btn btn-link btn-sm btn-rounded">Edit</a>
                        <a href="actions/post_delete.php?id=<?= $post['posts_id'] ?>" type="button"
                           class="btn btn-link btn-sm btn-rounded text-danger">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
