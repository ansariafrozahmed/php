<?php 

$connect = mysqli_connect('localhost', 'root' , '', 'st_users');
if (!$connect) {
    echo 'Database Connection Error';
}

?>