<!DOCTYPE <html>
<html lang="en">
<head>
    <meta charset="UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post">
<input type ="text" name="no_absen" placeholder= "Masukkan No Absen Anda... "> <br>
<input type="text" name="nama" placeholder= "Masukkan Nama Anda... "> <br>
<input type="text" name="alamat" placeholder= "Masukkan Alamat Anda..."> <br>
<input type="text" name="nilai" placeholder= "Masukkan Nilai Anda..."> <br>
<input type="submit" name="submit" vslue="Tampilkan Data">
</from>


<?php
if(isset($_POST['submit'])){

//menampung data ke dalam variabel
$NoAbsen =$_POST ['no_absen'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nilai = $_POST['nilai'];

//perintah menampilkan data
echo "Nomer Absen : ", $NoAbsen, "<br>";
echo "Nama : ", $nama, "<br>";
echo "Alamat : ", $alamat, "<br>";
echo "Nilai : ", $nilai;


}
?>
</body>
</html>
