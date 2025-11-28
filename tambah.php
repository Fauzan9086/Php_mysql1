<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">
        <h2 class="mb-4">Tambah Data Siswa</h2>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>

</body>

</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
}
?>