<?php
    include "koneksi.php";
    
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';

    $sql = "SELECT * FROM tbllogin WHERE username='$username' AND password='$password'";

    $hasil = mysqli_query($conn, $sql);
    if ($hasil == false)
        die("Perintah SQL salah");

    // uji apakah ada record yang dicari
    if (mysqli_num_rows($hasil) > 0)
        header("Location: ../admin/menu.php");
    else
        header("Location: ../admin/index.php");

?>