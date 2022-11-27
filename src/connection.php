<?php

    $server   = 'mysql_db';
    $username = 'root';
    $password = 'root';
    $database = 'perusahaan';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
        echo 'Koneksi gagal: ' . $e->getMessage();
    }