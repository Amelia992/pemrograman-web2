
<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_mahasiswa"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['Submit'])) {

    $id = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = mysqli_prepare(
        $koneksi,
        "INSERT INTO mahasiswa
        (id_mahasiswa, nama, jurusan, alamat, telepon)
        VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $query, "sssss",
        $id, $nama, $jurusan, $alamat, $telepon
    );

    if (mysqli_stmt_execute($query)) {
        echo "<script>
            alert('Data berhasil disimpan!');
            window.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal disimpan atau NIM sudah digunakan!');
            window.location='index.php';
        </script>";
    }
}
?>