<?php
// Jangan menampilkan HTML, echo, atau spasi sebelum header().
// Simulasi kondisi: jika sudah login, arahkan ke halaman tujuan.
$sudahLogin = true;

if ($sudahLogin) {
    header("Location: tujuan.php");
    exit;
}

// Output hanya dijalankan jika kondisi redirect tidak terpenuhi.
echo "Silakan login terlebih dahulu.";
