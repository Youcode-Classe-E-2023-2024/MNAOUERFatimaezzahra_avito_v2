<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/header.php'?>

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="actions/auth_login.php" method="post">
        <img class="mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
        <a href="index.php?page=register" class="w-100 btn btn-lg btn-primary mt-2" type="button">Sign up</a>
        <a href="index.php?page=home" class="w-100 btn btn-lg btn-secondary mt-2" type="button">Back</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
    </form>
</main>

</body>
</html>
