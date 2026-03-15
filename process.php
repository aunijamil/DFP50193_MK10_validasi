<!DOCTYPE html>
<html>
<head>
<title>Keputusan Permohonan</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="body">

<div class="container">

<h2 class="title">Semakan Permohonan</h2>

<?php

$nama = $_POST['nama'] ?? '';
$matrik = $_POST['matrik'] ?? '';
$umur = $_POST['umur'] ?? '';
$tarikh = $_POST['tarikh'] ?? '';
$program = $_POST['program'] ?? '';
$jenis = $_POST['jenis'] ?? '';
$alasan = $_POST['alasan'] ?? '';

$tujuan = "";
if(isset($_POST['tujuan'])){
    $tujuan = implode(", ", $_POST['tujuan']);
}

$error = false;

if($nama == ""){
echo "<p class='error'>Nama tidak boleh kosong</p>";
$error = true;
}

if($matrik == ""){
echo "<p class='error'>No Matrik tidak boleh kosong</p>";
$error = true;
}

if($umur == ""){
echo "<p class='error'>Umur tidak boleh kosong</p>";
$error = true;
}

if($tarikh == ""){
echo "<p class='error'>Tarikh tidak boleh kosong</p>";
$error = true;
}

if($program == ""){
echo "<p class='error'>Program mesti dipilih</p>";
$error = true;
}

if($jenis == ""){
echo "<p class='error'>Jenis laptop mesti dipilih</p>";
$error = true;
}

if($tujuan == ""){
echo "<p class='error'>Tujuan mesti dipilih</p>";
$error = true;
}

if($alasan == ""){
echo "<p class='error'>Alasan tidak boleh kosong</p>";
$error = true;
}

if(strlen($alasan) < 25){
echo "<p class='error'>Alasan mesti sekurang-kurangnya 25 aksara</p>";
$error = true;
}

if($error == false){

echo "<p class='success'>Permohonan berjaya dihantar</p>";

echo "<p>Nama: $nama</p>";
echo "<p>No Matrik: $matrik</p>";
echo "<p>Umur: $umur</p>";
echo "<p>Tarikh: $tarikh</p>";
echo "<p>Program: $program</p>";
echo "<p>Jenis Laptop: $jenis</p>";
echo "<p>Tujuan: $tujuan</p>";
echo "<p>Alasan: $alasan</p>";

}

?>

<br>

<a href="form.php" class="link">Kembali ke Borang Permohonan</a>

</div>

</body>
</html>