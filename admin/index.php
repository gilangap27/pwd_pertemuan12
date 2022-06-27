<?php
require '../function.php';

session_start();

$mahasiswa = query("SELECT * FROM mahasiswa");

// event button cari
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST['key']);
}

?>

<!-- halaman awal yg menampilkan seluruh data yg ada di db mahasiswa -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form action="../logout.php" method="POST">
      <button class="btn btn-outline-primary" name="logout" type="submit">LOG OUT</button>
    </form>
    <h1>List Data Mahasiswa</h1>
    <a href="insert.php" class="btn btn-primary mb-3">Tambah Data</a>

    <form action="" method="POST">
      <div class="input-group mb-3" style="width: 500px;">
        <input type="text" class="form-control" placeholder="Isi keyword" name="key" autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" name="cari">Cari</button>
      </div>
    </form>

    <table class="table table-hover">
      <!-- baris header-  -->
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>

      <!-- Cek jika data tdk ditemukan -->
      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="6" style="text-align: center;">
            <p>Data tidak ditemukan</p>
          </td>
        </tr>
      <?php endif; ?>

      <!-- baris data -->
      <!-- looping -->
      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="../images/<?= $mhs['foto']; ?>" width="50px"></td>
          <td><?= $mhs['nim']; ?></td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['prodi']; ?></td>
          <td>
            <a class="badge bg-warning" href="update.php?id=<?= $mhs['id'] ?>">Ubah</a> | <a class="badge bg-danger" href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm ('apakah anda yakin?');">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>