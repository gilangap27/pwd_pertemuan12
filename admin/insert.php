<?php
require '../function.php';

//cek apakah tombol submit diklik
if (isset($_POST['tambah'])) {
  // echo "berhasil";
  // tambahData($_POST);
  if (tambahData($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    li {
      list-style: none;
    }
  </style>
</head>

<body>
  <div class="container mt-5 mb-3">
    <h1 align="center">Form Tambah Data</h1>
    <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
    <form method="post" action="">
      <ul>
        <li>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-form-label">NIM</label>
            <div class="col-sm-5">
              <input type="text" name="nim" class="form-control" id="inputPassword" autofocus required>
            </div>
          </div>
        </li>
        <li>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-form-label">NAMA</label>
            <div class="col-sm-5">
              <input type="text" name="nama" class="form-control" id="inputPassword" required>
            </div>
          </div>
        </li>
        <li>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-form-label">PRODI</label>
            <div class="col-sm-5">
              <input type="text" name="prodi" class="form-control" id="inputPassword" required>
            </div>
          </div>
        </li>
        <li>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-form-label">FOTO</label>
            <div class="col-sm-5">
              <input type="text" name="foto" class="form-control" id="inputPassword" required>
            </div>
          </div>
        </li>
        <li>
          <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
        </li>
      </ul>
    </form>
    <!-- post $_POST : mengirim data ke server / datanya tertutup (form, password)
       get $_GET : mengirim data ke url browser / datanya publik (id, nama) -->
  </div>
</body>

</html>