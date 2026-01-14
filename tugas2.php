<h4> Menghitung Nilai</h4>
<h5>
<form method="post">
<input type="number" name="r"placeholder="masukan nilai r"> <br><br>
<input type="number" name="s"placeholder="masukan nilai s"> <br><br>
<label for="pilihan">pilih operasi yang di inginkan :</label<br>
<select name="operasi"id="operasi">
     <option value="luasalas"> luas alas </option>
     <option value="luaspermukaan "> luas permukaan </option>
     <option value="keduanya">keduanya</option>

    </select>  <br><br>
<input type="submit" name="submit" value="tampilkan hasil">
</form>
<?php
if(isset($_POST{'submit'})){

    $s=$_POST['s'];
    $r=$_POST['r'];
    $operasi=$_POST['operasi'];//menangkap nilai operasi
    $pi=3.14;
    $luasalas=$pi *$r *$s;
$luaspermukaan=$luasalas+($pi*$r*$s);
echo "nilai r adalah = $r <br>";
echo "nilai s adalah = $s <br>";
echo "phi =",pi(),"<br>";
//if untuk menentukan oprasi
if($operasi=="luasAlas"){
 echo "============================= <br>";
 echo "luas alas =$luasalas<br>";
}elseif($operasi=="luaspermukaan"){

echo "================================= <br>";
echo "luas permukaan =$luaspermukaan";
}else {

echo  "================================= <br>";
echo "luas alas =$luasalas<br>";

echo  "================================= <br>";
echo " luas permukaan =$luaspermukaan ";
}
}


