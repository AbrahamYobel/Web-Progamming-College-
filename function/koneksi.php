<?php
//koneksi ke databse server(mysql)
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
if (!$conn)
    die("Gagal Koneksi ke web server");

//konesi ke database
$db = "dbhairos";
$cdb = mysqli_select_db($conn,$db);
if (!$cdb)
    die ("Gagal koneksi ke dohairos");
?>