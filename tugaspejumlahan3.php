<head>
<h4>kalkulator sederhana</h4>
<h4>hana </h4>
<h4>XI-RPL 2<h4>
<head>
<form method="post">
<input type="number" name="anka1" placeholder="masukan nilai pertama">
<select name ="kalkulator"if="kal">
<option value="tambah" >+</option>
<option value="kurang" >-</option>
<option value="kali" >*</option>
<option value="bagi" >/</option>
</select>
<input type="number" name="angka2" placeholder="masukan nilai kedua">
<input type="submit" name="submit" value"="><br>
</form>

<?php
if(isset($_POST{'submit'})){
 $nilai1 =$_POST['angka1'];
 $nilai2 =$_POST['angka2'];
 $kalkulator =$_POST['kalkulator'];
 $tambah =$nilai1 + $nilai2;
 $kurang =$nilai1 - $nilai2;
 $kali =$nilai1 * $nilai2;
 $bagi =$nilai1 / $nilai2;
 if($kalkulator=="tambah"){
    echo " $jadi hasil" . $nilai1. "ditambah" .$nilai2. "adalah = " .$tambah. "<br>";
 }
 elseif ($kalkulator=="kurang"){
    echo "  $jadi hasil" . $nilai1. "dikurang" .$nilai2. "adalah = " .$kurang. "<br>";
 }
 elseif (kalkulator=="kali"){
    echo " $jadi hasil" .$nilai1. "dikali" . $nilai2. "adalah = " .$kali. "<br>";
 }
 else (kalkulator=="bagi"){
    echo "  $jadi hasil" .$nilai1. "dibagi" . $nilai2. "adalah = " .$bagi. "<br>";
 }
 
 



