<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="shell.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="position-absolute top-50 start-50 translate-middle">
<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
    <center>
    <form action="bukti.php" method="post">
    <label for="liter" >Masukkan Jumlah Liter :</label>
    <br>
    <input class="form-control" name="liter" id="liter" type="number">

    <label for="bb" >Tipe Bahan Bakar :</label>
    <br>
    <select class="form-select" id="bb" name="bb">
        <option value="Shell Super">Shell Super</option>
        <option value="Shell V-Power">Shell V-Power</option>
        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
    </select>

    <br>
    <!-- <button class="btn btn-primary" type="submit" name="kirim">Beli</button> -->
    <div class="d-grid gap-2 col-6 mx-auto">
        <center><button style="width:100px;" class="btn btn-primary" type="submit" name="kirim">Beli</button>
    </center></div>
    </form>
    </center>
</div>
</div>
</body>
</html>