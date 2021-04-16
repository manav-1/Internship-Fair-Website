<?php
$username = $_POST['email'];
$pass = $_POST['password'];
$connection = mysqli_connect("localhost", "root", "", "data");
$query = "SELECT * FROM data WHERE email = '$username' AND password = '$pass' ";
$result = mysqli_query($connection, $query);
$row = mysqli_num_rows($result);
if ($row > 0) {
    setcookie($username, $pass, time() + (86400 * 30), "/");
} else {
    echo "invalid user name or password";
}
?>
