<?php
include "dbconnect.php";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == "register") {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Register berhasil!');window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Register gagal!');window.location.href='register.php';</script>";
        }
    } else if ($action == "login") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            echo "<script>alert('Login berhasil!');window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Login gagal!');window.location.href='login.php';</script>";
        }
    }
}


?>