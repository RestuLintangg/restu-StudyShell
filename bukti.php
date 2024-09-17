<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<?php 
class Shell {
    protected $ppn= 0.1;
    protected $super= 15000;
    protected $power= 16000;
    protected $powerDiesel= 18000;
    protected $powerNitro= 16500;
}

class Beli extends Shell {
    public function setBukti ($harga, $liter) {
        $hasil= $harga * $liter + ($harga * $liter * $this->ppn);
        $ppn = $harga * $liter * $this->ppn;
        $hargaDasar = $harga * $liter;
        echo "<center> <br> Bukti Pembayaran <hr> Jenis Bahan Bakar : " . $_POST["bb"] . "<br>";
        echo "Jumlah Liter : " . $_POST["liter"] . " Liter <br>";
        echo "Harga per Liter : Rp " . number_format($harga, 0, "", ".") . "<br>";
        echo "Harga Dasar : Rp " . number_format($hargaDasar, 0, "", ".") . "<br>";
        echo "PPN (10%) : Rp " . number_format($ppn, 0, ",", ".") . "<br>";
        echo "<hr> Total Harga : Rp " . number_format($hasil, 0, ",", ".") . "<br><br></center>";
    }

    public function getBukti () {
        if(isset($_POST["kirim"])) {
            $liter = $_POST["liter"];
            $tipe = $_POST["bb"];

            if (!is_numeric($liter)||(empty($tipe))) {
                echo "<br><center>Masukkan jumlah pembelian <br><br>";
            }
            else {
                $total = new beli ();

                if ($tipe == "Shell Super") {
                    $harga = $total -> super; 
              } else if ($tipe == "Shell V-Power") {
                    $harga = $total -> power; 
              } else if ($tipe == "Shell V-Power Diesel") {
                    $harga = $total -> powerDiesel;
              } else if ($tipe == "Shell V-Power Nitro") {
                    $harga = $total -> powerNitro;
              } else {
                    $harga = 0;
              } $total -> setBukti ($harga,$liter); 
            }
        }
    }
}
$hitung = new beli();
echo $hitung -> getbukti ();
?>
    <center>
    <form action="index.php">
    <button class="btn btn-primary" type="submit">Kembali</button>
    </form>
    </center>

</body>
</html>


