<?php
session_start();

// Ambil data
$_SESSION['inputs'] = $_POST;

$nama = trim($_POST['nama'] ?? '');
$matrik = trim($_POST['matrik'] ?? '');
$no_tel = trim($_POST['no_tel'] ?? '');
$tarikh = trim($_POST['tarikh'] ?? '');
$program = trim($_POST['program'] ?? '');
$jenis = trim($_POST['jenis'] ?? '');
$alasan = trim($_POST['alasan'] ?? '');
$tujuan = $_POST['tujuan'] ?? [];

// Reset message
unset($_SESSION['errors']);
unset($_SESSION['success_data']);

// validation
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['errors'] = ["Sila hantar borang dahulu."];

} elseif ($nama == '') {
    $_SESSION['errors'] = ["Sila masukkan Nama Pelajar"];

} elseif ($matrik == '') {
    $_SESSION['errors'] = ["Sila masukkan No Matrik"];

} elseif ($no_tel == '') {
    $_SESSION['errors'] = ["Sila masukkan No Telefon"];

} elseif (!ctype_digit($no_tel)) {
    $_SESSION['errors'] = ["No Telefon mesti nombor sahaja"];

} elseif ($tarikh == '') {
    $_SESSION['errors'] = ["Sila masukkan Tarikh Permohonan"];

} elseif ($program == '') {
    $_SESSION['errors'] = ["Sila pilih Program"];

} elseif ($jenis == '') {
    $_SESSION['errors'] = ["Sila pilih Jenis Laptop"];

} elseif (empty($tujuan)) {
    $_SESSION['errors'] = ["Sila pilih sekurang-kurangnya satu tujuan pengunaan"];

} elseif ($alasan == '') {
    $_SESSION['errors'] = ["Sila masukkan Alasan"];

} elseif (strlen($alasan) < 25) {
    $_SESSION['errors'] = ["Alasan mesti sekurang-kurangnya 25 aksara"];

} else {
    // Success
    $_SESSION['success_data'] = [
        'nama' => htmlspecialchars($nama),
        'matrik' => htmlspecialchars($matrik),
        'no_tel' => htmlspecialchars($no_tel),
        'tarikh' => htmlspecialchars($tarikh),
        'program' => htmlspecialchars($program),
        'jenis' => htmlspecialchars($jenis),
        'tujuan' => array_map('htmlspecialchars', $tujuan),
        'alasan' => htmlspecialchars($alasan)
    ];

    header("Location: result.php");
    exit();
}

// Kalau ada error
header("Location: index.php");
exit();