<?php
include "koneksi.php";

// Pengaturan Paginasi
$per_halaman = 5; // Tampilkan 5 data per halaman
$halaman     = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$awal        = ($halaman - 1) * $per_halaman;

// Hitung total data
$query_total = mysqli_query($koneksi, "SELECT * FROM tbl_tamu");
$total_data  = mysqli_num_rows($query_total);
$total_hal   = ceil($total_data / $per_halaman);

// Ambil data dengan batas
$sql    = "SELECT * FROM tbl_tamu ORDER BY tanggal DESC LIMIT $awal, $per_halaman";
$hasil  = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku Tamu</title>
    <style>
        body { font-family: Arial; max-width: 700px; margin: 30px auto; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #4CAF50; color: white; }
        .halaman { margin-top: 20px; text-align: center; }
        .halaman a { padding: 5px 10px; margin: 0 3px; border: 1px solid #ccc; text-decoration: none; }
        .halaman a.aktif { background: #4CAF50; color: white; }
        a { color: blue; text-decoration: none; }
    </style>
</head>
<body>
    <h2>📋 DAFTAR BUKU TAMU</h2>
    <p>Total tamu: <strong><?php echo $total_data; ?></strong> | Halaman <?php echo $halaman; ?> dari <?php echo $total_hal; ?></p>
    
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>
        <?php
        $no = $awal + 1;
        while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td><?php echo htmlspecialchars($data['pesan']); ?></td>
            <td><?php echo date('d/m/Y H:i', strtotime($data['tanggal'])); ?></td>
        </tr>
        <?php $no++; } ?>
    </table>

    <!-- Navigasi Halaman -->
    <div class="halaman">
        <?php if ($halaman > 1): ?>
            <a href="tampil_tamu.php?halaman=<?php echo $halaman - 1; ?>">&laquo; Sebelumnya</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_hal; $i++): ?>
            <a href="tampil_tamu.php?halaman=<?php echo $i; ?>" 
               class="<?php echo ($halaman == $i) ? 'aktif' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <?php if ($halaman < $total_hal): ?>
            <a href="tampil_tamu.php?halaman=<?php echo $halaman + 1; ?>">Berikutnya &raquo;</a>
        <?php endif; ?>
    </div>

    <br>
    <a href="form_tamu.php">← Kembali ke Form</a>
</body>
</html>
