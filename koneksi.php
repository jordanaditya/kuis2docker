<?php   
    $host     = "10.0.0.104";
    $username = "admin";
    $database = "ajc";
    $koneksi  = mysqli_connect($host, $username, 'Pa$$w0r,d', $database);
    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
   
?>