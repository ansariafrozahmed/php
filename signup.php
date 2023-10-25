<?php
$alert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'database/db_connect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email) {
        $sql = "INSERT INTO `users` (`email`, `password`, `date_time`) VALUES ('$email', '$password', current_timestamp())";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            $alert = true;
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ansari Afroz Ahmed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'Includes/header.php' ?>
    <!-- Header Include -->

    <?php
    if ($alert) {
        echo '
            <div class="alert alert-success alert-dismissable text-center w-50 m-auto my-3" role="alert">
                <h5>Successfully Registered!!</h5>
                <h5>You Can Now <a href="login.php" class="text-decoration-none">LogIn</a></h5>
            </div>
            ';
    }
    ?>

    <div class="container w-50">
        <h1 class="text-center">Sign Up</h1>
        <form action="login.php" method="post">
            <div class="form-group my-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group my-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Footer Include -->
    <?php include 'Includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>