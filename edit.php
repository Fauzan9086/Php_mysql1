<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM Siswa WHERE id =$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Edit Data Siswa</h2>

        <form method="post">
            <div class="mb-3">
                <label class="from-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?> required">
            </div>
            <div class="mb-3">
                <label class="from-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="<?= $row['kelas']; ?> required">
            </div>
            <div class="mb-3">
                <label class="from-label">Alamat</label>
                <textarea class="form-control" name="alamat" required> <?= $row['alamat']; ?></textarea>
            </div>
            <button class="btn btn-primary" name="update">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];

        mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=$id");
    }
    ?>



</body>

</html>