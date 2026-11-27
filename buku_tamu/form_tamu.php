<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Tamu</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 30px auto; padding: 20px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 20px; padding: 10px 20px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        a { display: inline-block; margin-top: 20px; color: blue; }
    </style>
</head>
<body>
    <h2>📖 BUKU TAMU</h2>
    
    <form method="post" action="simpan_tamu.php">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" required>

        <label>Email:</label>
        <input type="email" name="email">

        <label>Pesan/Kesan:</label>
        <textarea name="pesan" rows="5" required></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

    <a href="tampil_tamu.php">👉 Lihat Daftar Tamu</a>
</body>
</html>
