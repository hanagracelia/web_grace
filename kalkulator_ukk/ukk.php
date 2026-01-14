<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana | UKK 2025 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <style type="text/css">.btn{
        width: 100%
    }
</style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Kalkulator Sederhana</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
        

            <form method="POST" class="p-2 border rounded bg-light">
                <!-- ANGKA PERTAMA -->
                <label class="form-label">Angka Pertama</label>
                <input type="number" name="angka1"class="form-control" autocomplete="off" min="0" autofocus required onkeypress="return event.charCode >= 48 && event.charCode <= 57" 
                value="<?php echo isset ($_POST['hasil']) ? $_POST['hasil'] : '' ?>">

                <!-- ANGKA KEDUA -->
                <label class="form-label">Angka Kedua</label>
                <input type="number" name="angka2"class="form-control" autocomplete="off" min="0" autofocus required onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                <!-- OPERATOR -->
                <div class="d-flex justify-content-center gap-2 mt-2">
                <button type="submit" class="btn btn-primary" name="operator" value="+" title="tambah"><i class="fas fa-plus"></i></button>
                <button type="submit" class="btn btn-secondary" name="operator" value="-" title="kurang"><i class="fas fa-minus"></i></button>
                <button type="submit" class="btn btn-success" name="operator" value="*" title="kali"><i class="fas fa-xmark"></i></button>
                <button type="submit" class="btn btn-info" name="operator" value="/" title="bagi"><i class="fas fa-divide"></i></button>
                <!-- Clear -->
                |
                <button type="reset" name="reset" value="reset" title="Clear Entry" class="btn btn-warning">CE</button>
                </div>
            </form>

            <div class="p-2 border rounded bg-light">

            <h4 class="text-center">

                <?php
                if(isset($_POST['operator'])){
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    $operator = $_POST['operator'];

                    if(!is_numeric($angka1) || !is_numeric($angka2)){
                        echo"<script>alert('input harus berupa angka)</script>";
                    }elseif($operator == '/' && $angka2 == 0){
                        echo"<script>alert('Tidak dapat Membagi Dengan Angka Nol')</script>";
                    }else{
                        switch ($operator) {
                            case '+':
                                $hasil = $angka1 + $angka2;
                                break;

                            case '-':
                                $hasil = $angka1 - $angka2;
                                break;

                            case '*':
                                $hasil = $angka1 * $angka2;
                                break;

                            case '/':
                                $hasil = $angka1 / $angka2;
                                break;
                            
                            default:
                        echo "Operator Tidak Valid";
                                break;
                        }
                        echo "$angka1 $operator $angka2 = $hasil";
                    }
                    }else{
                        echo "Hasil :";
                    
                }
                ?>

                </h4>
                    <!-- Tombol ME -->
                <div class="row">
                    <div class="col-6">
                        <?php if (!empty($hasil)) :?>
                        <form  method="POST" >
                            <input type="hidden" name="hasil" value="<?php echo $hasil ?>">
                            <button type="submit" class="btn btn-primary"tittle="Memory Entry">ME</button>
                             </form>
                            <?php endif; ?>
                    </div>

                    <!-- Tombol MC -->
                    <div class="col-6">
                        <?php if (isset($hasil) && $hasil !== null) :?>
                        <form  method="POST" >
                        <button type="submit" name="resethasil"class="btn btn-danger"tittle="Memory Clear">MC</button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <p class="text-center">&copy;UKK RPL 2025 | HANA | XI RPL 2</p>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</body>
</html>
        