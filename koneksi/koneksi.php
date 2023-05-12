<?php

    $user = 'root';
    $pass = '';

    $koneksi = new PDO("mysql:host=localhost;dbname=rental_Gaming", $user, $pass);

    global $url;
    $url = "http://localhost/rental_Gaming/";
<<<<<<< HEAD
=======
    
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

    $sql_web = "SELECT * FROM infoweb WHERE id = 1";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();
    global $info_web;
    $info_web = $row_web->fetch(PDO::FETCH_OBJ);

    error_reporting(0);
?>