<?php

require '../function.php';

if(isset($_POST["kirim"])) {
    if(tambahGtk($_POST) > 0) {
        echo "
            <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
            window.location = 'gtk.php';
            </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
          alert('Data produk gagal ditambahkan');
          window.location = 'gtk.php';
        </script>
    "; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
            .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Buku Tamu</a>
  </div>
</nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <h3 class="text-center">Tambah Data Gtk</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control mb-3">

                    <label for="roles">Roles</label>
                    <select class="form-select mb-3" id="roles" name="roles" aria-label="Default select example">
                        <option selected>Pilih lah roles ini</option>
                        <option value="1">Kepala Sekolah</option>
                        <option value="2">Wakil Kepala Sekolah</option>
                        <option value="3">Guru</option>
                    </select>

                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control mb-3">

                    <button type="submit" name="kirim" class="btn btn-dark">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>