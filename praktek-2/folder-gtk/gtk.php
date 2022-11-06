<?php 

require '../function.php';

$gtk = query("SELECT * FROM gtk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      table {
        margin: auto;
        text-align: center;
      }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Buku Tamu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li>
                    <a href="../Tampilan/tampilan_awal.php" class="nav-link px-0 text-info"> <span class="d-none d-sm-inline">Home</a>
                  </li>
                  <li>
                    <a href="../folder-resepsionis/resepsionis.php" class="nav-link px-0 text-info"> <span class="d-none d-sm-inline">Resepsionis</a>
                  </li>
                  <li>
                    <a href="../folder-gtk/gtk.php" class="nav-link px-0 text-info"> <span class="d-none d-sm-inline">Gtk</a>
                  </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
        <button type="button" class="btn btn-dark mb-3 rounded-4"><a href="tambah_gtk.php" class="nav-link px-0 text-info"><h3>Tambah Data Gtk</h3></a></button>
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Roles</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($gtk as $isi) : ?>
              <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $isi["nama_lengkap"]; ?></td>
                <td><?= $isi["roles"]; ?></td>
                <td><img src="../foto/<?= $isi["foto"]; ?>" width="50"></td>
                <td>
                  <a href="edit_gtk.php?id=<?= $isi["id_gtk"]; ?>" class="btn btn-dark rounded-4 w-25 text-info">Edit</a>
                  <a href="hapus_gtk.php?id=<?= $isi["id_gtk"]; ?>" class="btn btn-dark rounded-4 text-info" onClick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
              </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
          </tbody>  
        </div>
    </div>
</div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
