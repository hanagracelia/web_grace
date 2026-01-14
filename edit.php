<?php
include 'koneksi.php';
$nisn=$_GET['nisn'];

$sql="SELECT * FROM siswa WHERE nisn='$nisn'";
$hasil=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($hasil);
?>

<html>
<body>
   <h2>Form edit data siswa</h2>
<form action="proses_edit.php" method="POST">

  <label for="fnisn">Nisn :</label><br>
  <input type="number" id="fnisn" name="nisn" value="<?php echo $data['nisn']?>"><br>

  <label for="lnama">Nama:</label><br>
  <input type="text" id="lnama" name="nama" value="<?php echo $data['nama']?>"><br>
  
  
  <label for="lkelas">Kelas:</label><br>
  <input type="text" id="lkelas" name="kelas" value="<?php echo $data['kelas']?>"><br>

  <label for="ljurusan">Jurusan:</label><br>
  <input type="text" id="ljurusan" name="jurusan" value="<?php echo $data['jurusan']?>"><br>

  <label for="lalamat">Alamat:</label><br>
  <input type="text" id="lalamat" name="alamat" value="<?php echo $data['alamat']?>"><br>

  <label for="lttl">Tempat Tanggal Lahir:</label><br>
  <input type="text" id="lttl" name="ttl" value="<?php echo $data['ttl']?>"><br>

  <label for="ljk">Jenis Kelamin:</label><br>
  <input type="text" id="ljk" name="jk" value="<?php echo $data['jk']?>"><br><br>

  <input type="submit" value="simpan perubahan">



</form>
<body>
</html>
