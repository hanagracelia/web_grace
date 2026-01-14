<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function formatRupiah(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if(input.value != '') {
                input.value = 'Rp ' + parseFloat(input.value).toLocaleString('id-ID');
            }
        }
    </script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
            <form method="POST" class="border rounded bg-light p-2">
                <label class="form-label">Harga Barang (Rp)</label>
                <input type="text" name="harga" class="form-control" step="0.01" 
                placeholder="Masukan harga barang" min="0" autocomplete="off" required 
                oninput="formatRupiah(this)">
                
                
                <label class="form-label">Diskon (%)</label>
                <input type="text" maxlength="3" name="diskon" class="form-control" 
                step="0.01" placeholder="Masukan diskon (0-100)" autocomplete="off" min="0" required 
                onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung">Hitung</button>
            </form>

            <?php
            if (isset($_POST['hitung'])) {
                $harga = str_replace(['Rp ', '.'], '', $_POST['harga']);
                $diskon = $_POST['diskon'];

                if ($harga < 0) {
                    echo "<script>alert('Harga tidak boleh negatif!')</script>";
                } elseif ($diskon < 0 || $diskon > 100) {
                    echo "<script>alert('Diskon harus diantara angka 0-100!')</script>";
                } else {
                    $nilai_diskon = $harga * ($diskon / 100);
                    $total_harga = $harga - $nilai_diskon;
            ?>
                    <div class="border rounded p-2 bg-light mt-2">
                        <p>Harga Barang : Rp. <b><?php echo number_format($harga, 0, ',', '.'); ?></b></p>
                        <p>Diskon <?php echo $diskon; ?>% : Rp. <b><?php echo number_format($nilai_diskon, 0, ',', '.'); ?></b></p>
                        <p>Total Harga setelah diskon : Rp. <b><?php echo number_format($total_harga, 0, ',', '.'); ?></b></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<p class="text-center">&copy; UKK 2025 | hana | IX RPL2</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</htm