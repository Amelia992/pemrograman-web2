<?php
// Halaman utama project Error Handling 2
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik Error Handling 2</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 40px auto; padding: 0 18px; line-height: 1.6; }
        h1 { color: #173b67; }
        .menu { padding: 18px; border: 1px solid #ddd; border-radius: 10px; margin: 14px 0; }
        a { color: #0759a5; }
        code { background: #f2f2f2; padding: 2px 5px; }
    </style>
</head>
<body>
    <h1>Praktik Error Handling 2</h1>
    <p>Contoh penerapan solusi dari materi Pemrograman Web 2 Pertemuan 17.</p>

    <div class="menu">
        <h2>1. Header Redirect</h2>
        <p>Contoh penggunaan <code>header("Location: ...")</code> tanpa output sebelum redirect.</p>
        <a href="redirect.php">Buka contoh redirect</a>
    </div>

    <div class="menu">
        <h2>2. Koneksi Database MySQL</h2>
        <p>Contoh koneksi database dan penanganan kegagalan koneksi.</p>
        <a href="koneksi.php">Buka contoh koneksi database</a>
    </div>

    <div class="menu">
        <h2>3. Object Oriented Programming (OOP)</h2>
        <p>Contoh class dan object dengan sintaks PHP modern.</p>
        <a href="oop.php">Buka contoh OOP</a>
    </div>
</body>
</html>
