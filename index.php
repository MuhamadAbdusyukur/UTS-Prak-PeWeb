<!DOCTYPE html>
<html>

<head>
    <title>Form Tamu</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2 align="center">REGISTER KARTU TELKOMSEL</h2>
        <form action="./register.php" method="post">
            <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="number" name="NIK" maxlength="15" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="no_kk">No Kartu Keluarga</label>
                <input type="number" name="no_kk" maxlength="15" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="no_tlp">No Telepon</label>
                <input type="number" name="no_tlp" maxlength="12" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" maxlength="12" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" maxlength="50" class="form-input" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>