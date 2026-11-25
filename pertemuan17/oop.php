<?php
// Contoh OOP menggunakan sintaks yang didukung PHP modern.
class Mahasiswa
{
    private string $nama;
    private string $nim;
    private string $programStudi;

    public function __construct(string $nama, string $nim, string $programStudi)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->programStudi = $programStudi;
    }

    public function tampilkanData(): string
    {
        return "Nama: {$this->nama}<br>"
             . "NIM: {$this->nim}<br>"
             . "Program Studi: {$this->programStudi}";
    }
}

$mahasiswa = new Mahasiswa(
    "Gita Amelia",
    "231011401212",
    "Teknik Informatika"
);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Contoh OOP PHP</title>
</head>
<body>
    <h1>Contoh Object Oriented Programming</h1>
    <h2>Data Mahasiswa</h2>
    <p><?php echo $mahasiswa->tampilkanData(); ?></p>
    <a href="index.php">Kembali</a>
</body>
</html>
