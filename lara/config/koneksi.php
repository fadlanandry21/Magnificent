<?php
$rootDir = $_SERVER['DOCUMENT_ROOT'];
$host = "localhost";
$user = "root";
$Password = "";
$database = "magnificent";

// membaut Koneksi PHP
$koneksi = mysqli_connect($host, $user, $Password, $database);

// cek koneksi
if (!$koneksi) {
    die("Tidak Dapat Terkoneksi dengan Database: " . mysqli_connect_error());
}
