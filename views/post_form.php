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
    <h1>Post Form</h1>

    <?php if (empty($_GET['id'])) : ?>
        <form action="actions/post_add.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="desc" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block my-4">Send</button>
        </form>
    <?php else : ?>
        <?php
            global $db;

            $id = $_GET['id'];
            $result = $db->query("SELECT * FROM posts WHERE posts_id = '$id'");
            $post = $result->fetch_assoc();
        ?>
        <form action="actions/post_edit.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="title" value="<?= $post['posts_title'] ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="desc" class="form-control" aria-label="With textarea"><?= $post['posts_description'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block my-4">Send</button>
            <input type="hidden" id="postId" name="post_id" value="<?= $id ?>"/>
        </form>
    <?php endif; ?>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
