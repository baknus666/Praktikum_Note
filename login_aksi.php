<?php
session_start();
require_once("database.php");

$username=$_POST['username'];
$password=$_POST['password'];
var_dump($username, $password);
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
// var_dump($data);
$hasil = mysqli_num_rows($data);
if ($hasil > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin';
    $_SESSION['login'] = true;
    header("location: list_notes.php");
} else {
    header("location: login.php");
}

?>