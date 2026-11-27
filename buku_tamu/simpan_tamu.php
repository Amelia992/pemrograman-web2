<?php
include "koneksi.php";

// Ambil data dari form
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Hindari karakter berbahaya
$nama  = mysqli_real_escape_string($koneksi, $nama);
$email = mysqli_real_escape_string($koneksi, $email);
$pesan = mysqli_real_escape_string($koneksi, $pesan);

// Query simpan data
$sql = "INSERT INTO tbl_tamu (nama, email, pesan) 
        VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('✅ Terima kasih! Pesan berhasil disimpan'); 
          document.location='form_tamu.php';</script>";
} else {
    echo "❌ Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
