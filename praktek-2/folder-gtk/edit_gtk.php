<?php 

require '../function.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editGtk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data gtk berhasil diedit');
                window.location = 'gtk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data gtk gagal diedit');
            window.location = 'gtk.php'
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
            <h3 class="text-center">Edit Data Gtk</h3>
        <form action="" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">

<label for="nama_lengkap">Nama Lengkap</label>
<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"] ?>">

<label for="roles">Roles</label>
<select name="roles" class="form-control" value="<?= $gtk["roles"];?>">
    <option value="Kepala Sekolah">Kepala Sekolah</option>
    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
    <option value="Guru">Guru</option>
</select>

<label for="foto">Foto</label>
<input type="file" name="foto" id="foto" class="form-control mb-3" value="<?= $gtk["foto"] ?>">

<button type="submit" name="kirim" class="btn btn-dark">Kirim</button>
</form>
        </div>
    </div>
</div>
</body>
</html>