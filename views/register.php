<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/header.php'?>

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="actions/auth_register.php" method="post">
        <img class="mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
            <label for="floatingUsername">Username</label>
        </div>

        <div class="form-floating">
            <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        <a href="index.php?page=login" class="w-100 btn btn-lg btn-success mt-2" type="button">Sign in</a>
        <a href="index.php?page=home" class="w-100 btn btn-lg btn-secondary mt-2" type="button">Back</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
    </form>
</main>

</body>
</html>
