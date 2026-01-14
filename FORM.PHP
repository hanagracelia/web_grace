<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body>
      
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(131, 10, 179);">
        <div class="container">
         <a class="navbar-brand" href="#section1">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section2">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">kalkulator</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="section1">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

<h2 class="text-light bg-primary text-center card-header" >Form Tambah Data Siswa</h2>
<form action="proses_tambah_siswa.php" method="POST" class="card-body">
   
  <label for="fnisn" class="form-label">Nisn :</label><br>
  <input type="number" class="form-control" id="fnisn" name="nisn" value=""required><br>

  <label for="lnama" class="form-label"> Nama :</label><br>
  <input type="text" class="form-control" id="lname" name="nama" value=""required><br>

  <label for="lkelas"class="form-label">Kelas :</label><br>
  <select id="kelas" class="form-control" name="kelas"required>
    <option value="">Pilih</option>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
  </select>
  <br>

  <label for="ljurusan" class="form-label">Jurusan :</label><br>
  <select id="jurusan" class="form-control" name="jurusan"required>
   <option value="">Pilih</option>
    <option value="Rekayasa Perangkat Lunak">RPL</option>
    <option value="Desain Komunikasi Visual">DKV</option>
    <option value="Teknik Komputer Jaringan">TKJ </option>
  </select>
  <br>

  <label for="lalamat"class="form-label">Alamat :</label><br>
  <input type="text" class="form-control" id="lname" name="alamat" value=""required><br>

  <label for="lttl" class="form-label">Tanggal Lahir :</label><br>
  <input type="date" class="form-control" id="lname" name="ttl" value=""required><br>
  

  <label for="ljk"class="form-label">Jenis Kelamin :</label><br>
  <select id="jk" class="form-control" name="jk"required>
    <option value="">Pilih</option>
    <option value="Perempuan">PR</option>
    <option value="Laki-laki">LK</option>
  </select>
  <br><br>

  <input type="submit" value="Tambah Data">
</form>

</div>
</div>
</div>
</div>
</div>


<!-- section 2-->
<div id="section2">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

<h2>Data siswa</h2>
<?php
include 'koneksi.php';
$sql = "SELECT nisn, nama, kelas, jurusan, alamat FROM siswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //membuat judul kolom
  echo 
  "<table><tr> <th>NAMA</th><th>KELAS</th><th>JURUSAN</th><th>ALAMAT</th><th>AKSI</th> </tr>";
  // menampilkan data berdasarkan jumlah baris
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" . $row["nama"]. "</td> <td>" . $row["kelas"]."</td><td>".$row["jurusan"]."</td>
    <td>".$row["alamat"]."</td>
    <td> <a href='edit.php?nisn=".$row['nisn']."'>Edit</a> |
    <a href='delete.php?nisn=".$row['nisn']."'>Hapus</a>
    </td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
  ?>
</div>
</div>
</div>
</div>
</div>


<!-- section 3 -->
<div id="section3">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

  <iframe src="kalkulator.php" height="500px" width="100%" title="iframe example"></iframe>

</div>
</div>
</div>
</div>
</div>


</body>
</html>