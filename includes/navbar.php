<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?page=home">Avito</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?page=home">Dashboard</a>
                </li>
                <li class="nav-item" id="fz">
                    <a class="nav-link" href="index.php?page=post">Publications</a>
                </li>
                <?php if (isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=user">Users</a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="d-flex">
                <?php if (empty($_SESSION['user_id'])) : ?>
                    <a href="index.php?page=login" class="btn btn-success me-2" type="button">Login</a>
                    <a href="index.php?page=register" class="btn btn-outline-primary me-2" type="button">Register</a>
                <?php else : ?>
                    <a href="index.php?page=profile" class="btn btn-light me-2" type="button">Profile</a>
                    <a href="actions/auth_logout.php" class="btn btn-outline-danger" type="button">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
