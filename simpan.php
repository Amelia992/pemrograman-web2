<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

// Cek apakah data dikirim pakai method POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("❌ Harap akses melalui form saja");
}

// Cek apakah semua data ada
if (!isset($_POST['nama']) || !isset($_POST['pesan'])) {
    die("❌ Data tidak lengkap");
}

$nama  = trim($_POST['nama']);
$email = trim($_POST['email'] ?? '');
$pesan = trim($_POST['pesan']);

// Cek isi tidak kosong
if (empty($nama) || empty($pesan)) {
    die("❌ Nama dan Pesan tidak boleh kosong");
}

// Bersihkan data
$nama  = mysqli_real_escape_string($koneksi, $nama);
$email = mysqli_real_escape_string($koneksi, $email);
$pesan = mysqli_real_escape_string($koneksi, $pesan);

// Query simpan
$sql = "INSERT INTO tbl_tamu (nama, email, pesan) 
        VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('✅ Berhasil disimpan!'); location='form_tamu.php';</script>";
} else {
    echo "<h3>❌ Error Database:</h3>";
    echo "<strong>Pesan Error:</strong> " . mysqli_error($koneksi) . "<br>";
    echo "<strong>SQL:</strong> $sql<br>";
}

mysqli_close($koneksi);
?>

