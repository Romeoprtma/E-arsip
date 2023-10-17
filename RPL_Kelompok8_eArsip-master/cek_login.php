<?php
session_start();
include "config/koneksi.php";

// Sintaksis login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password']; // Password dalam teks biasa (belum di-hash)

    $query = "SELECT * FROM tbl_user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        if ($data && password_verify($password, $data['password'])) {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            header('location:admin.php');
        } else {
            echo "<script>alert('Username atau password salah!'); document.location='index.php';</script>";
        }
    } else {
        echo "Error in query: " . mysqli_error($koneksi);
    }
}
git push -u origin main
?>