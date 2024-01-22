<?php
    session_start();
    require_once("database.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $data=mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    var_dump($data);
    if (mysqli_num_rows($data) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
        header("location: list_notes.php");
    } else {
        header("location: login.php");
    }
?>