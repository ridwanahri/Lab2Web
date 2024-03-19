<h1>Form Pekerjaan</h1>
<form action="tugas_praktikum.php" method="post">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br>
    <label for="TglLahir">Tanggal Lahir:</label><br>
    <input type="date" id="TglLahir" name="TglLahir" required><br>
    <label for="kerja">Perkerjaan:</label><br>
    <select id="kerja" name="kerja" required>
        <option value="Manajer">Manajer</option>
        <option value="Dosen">Dosen</option>
        <option value="Karyawan">Karyawan</option>
    </select><br>
    <input type="submit" value="Submit">

</form>

<?php
$nama = $_POST['nama'];
$TglLahir = new DateTime($_POST['TglLahir']);
$now = new DateTime();
$interval = $now->diff($TglLahir);
$umur = $interval->y;
$kerja = $_POST['kerja'];
$gaji = 0;

switch ($kerja) {
    case 'Manajer':
        $gaji = 15000000;
        break;
    case 'Dosen':
        $gaji = 3000000;
        break;
    case 'Karyawan':
        $gaji = 4000000;
        break;
    default:
        echo "Pekerjaan Tidak Ditemukan!";
}

echo "<p>Hello, $nama!</p>";
echo "<p>Umur Anda adalah $umur Tahun.</p>";
echo "<p>Gaji Anda sebagai $kerja adalah Rp.$gaji/Bulan.</p>";
?>