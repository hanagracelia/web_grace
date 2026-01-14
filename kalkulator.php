<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center ">
<div class="col-md-6">
<div class="card">
<h2 class="text-light bg-primary text-center card-header"> kalkulator sederhana</h2>
<form action="kalkulator.php"method="POST" class="card-body">



<div class="form-group mb-3 mt-3 text-center">
<label for="b1" class="text-success"> bilangan ke satu:</label>
<input type="number" class="form-control" id="b1" placeholder="masukan bilangan" name="bilangan1" required>
</div>
<div class="form-group mb-3 mt-4 ">
<select class="form-select" name="operator">
         <option value="tambah">Tambah</option>
         <option value="kurang">kurang</option>
         <option value="kali">kali</option>
         <option value="bagi">bagi</option>
         </select>
         </div>


    <div class="form-group mb-3 mt-3 text-center ">
    <label for="b2"> bilangan ke dua:</label>
    <input type="number" class="form-control" id="b2" placeholder="masukan bilangan" name="bilangan2" required>
    </div>
   
    <div class="form-group text-center mb-3 mt-3">
    <button type="submit" class=" btn btn-warning btn-lg"name="hasil">hasil</button>
    </div>
    </form>

    <div class="card-footer text-center">

    <?php
    if(isset ($_POST['hasil'])){
    $bilangan1=$_POST['bilangan1'];
    $bilangan2=$_POST['bilangan2'];
    $operasi=$_POST['operator'];
    $hasil;

    switch($operasi) {
    case 'tambah':
    $hasil= $bilangan1 + $bilangan2;
    break;
       
    case 'kurang':
    $hasil= bilangan1 - $bilangan2;
    break;
    
    case 'kali':
    $hasil= bilangan1 * $bilangan2;
    break;

    case 'bagi':
    if($bilangan2!=0){
    $hasil= bilangan1 / $bilangan2;
    } else{
    $hasil=0;
    echo "<h2> Tidak dapat melakukan pembagian 0 !!";
    }
    
    break;
    default:
    echo "perintah tidak sesuai !";
    break;

  }
  echo "<h2> Hasil       ". $bilangan1 ."      di". $operasi ." ". $bilangan2 . " = ". $hasil . "</h2>";
    }
?>
    </div>
    </div>
  </div>
  </div>
</div>

</body>
</html>