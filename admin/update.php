<?php
require "../function.php";

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];

//cek apakah tombol submit diklik
if (isset($_POST['tambah'])) {
    if (updateData($_POST) > 0) {
        echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
          </script>";
    } else {
        echo "data gagal diubah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 align="center">Form Update Data</h1>
        <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
        <form method="post" action="">
            <ul>
                <li><input type="hidden" name="id" value="<?= $mhs['id'] ?>"></li>
                <li>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-form-label">NIM</label>
                        <div class="col-sm-5">
                            <input type="text" name="nim" value="<?= $mhs['nim'] ?>" class="form-control" id="inputPassword" autofocus required>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-form-label">NAMA</label>
                        <div class="col-sm-5">
                            <input type="text" name="nama" value="<?= $mhs['nama'] ?>" class="form-control" id="inputPassword" required>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-form-label">PRODI</label>
                        <div class="col-sm-5">
                            <input type="text" name="prodi" value="<?= $mhs['prodi'] ?>" class="form-control" id="inputPassword" required>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-form-label">FOTO</label>
                        <div class="col-sm-5">
                            <input type="text" name="foto" value="<?= $mhs['foto'] ?>" class="form-control" id="inputPassword" required>
                        </div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
                    <a class="btn btn-danger" href="index.php" name="batal">Batal</a>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>