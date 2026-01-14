<?php
  include 'koneksi.php';
$nisn=$_GET['nisn'];

$sql = "DELETE FROM siswa WHERE nisn='$nisn'";

if ($conn->query($sql) === TRUE) {
  header("location: form.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
