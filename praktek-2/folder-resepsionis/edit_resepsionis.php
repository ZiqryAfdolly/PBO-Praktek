<?php

require '../function.php';

$id = $_GET["id"];
$resepsionis = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editResepsionis($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data resepsionis berhasil diubah');
                window.location = 'resepsionis.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data resepsionis gagal ditambahkan');
            window.location = 'resepsionis.php'
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
    <title>Edit Resepsionis</title>
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
        <h3>Edit Data Resepsionis</h3>
        <form action="" method="POST">
            <input type="hidden" name="id_resepsionis" value="<?= $resepsionis["id_resepsionis"]; ?>">

            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $resepsionis["username"]; ?>">

            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"  value="<?= $resepsionis["nama_lengkap"]; ?>">

            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control"  value="<?= $resepsionis["kelas"]; ?>">

            <label for="roles">Roles</label>
            <select name="roles" class="form-control mb-3" value="<?= $user["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select>

            <button type="submit" name="kirim" class="btn btn-dark">Kirim</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>