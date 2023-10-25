<?php
$alert = false;
$login = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'database/db_connect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "select * from users where email='$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: index.php");
    } else {
        echo 'Invalid';
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

    <div class="container w-50">
        <h1 class="text-center">Log In</h1>
        <form action="login.php" method="post">
            <div class="form-group my-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group my-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>

    <!-- Footer Include -->
    <?php include 'Includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>