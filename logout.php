<?php
session_start();
session_destroy();
// echo '<script>alert("Successfully Log Out!!")</script>';
header('Location: login.php');
?>