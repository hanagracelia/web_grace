<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sekolah_grace";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal eror karena: " . $conn->connect_error);
}
echo "Koneksi Berhasil";
?>