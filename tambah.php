<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMBELIAN BBM</title>
</head>
<body>
    <h1>Form Pembelian BBM</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
        <fieldset>
            <p>
                <label for="NIK">NIK:</label>
                <input type="number" name="NIK"/>
</p>
<p>
    <label for="Jenis_kendaraan">Jenis_kendaraan:</label>
    <select name="Jenis_kendaraan">
        <option value="montor">montor</option>
        <option value="mobil">mobil</option>
        <option value="truck">truck</option>
        <option value="bis">bis</option>
        <option value="tossa">tossa</option>


</select>
</p>
<p>
    <input type="submit" value="Kirim Data" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>