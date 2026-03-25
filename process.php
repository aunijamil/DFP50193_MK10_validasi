<?php
session_start();

$nama = $_POST['nama'] ?? '';
$matrik = $_POST['matrik'] ?? '';
$no_tel = $_POST['no_tel'] ?? '';
$tarikh = $_POST['tarikh'] ?? '';
$program = $_POST['program'] ?? '';
$jenis = $_POST['jenis'] ?? '';
$alasan = $_POST['alasan'] ?? '';
$tujuan = $_POST['tujuan'] ?? []; // tetap array

$errors = [];

// Validation
if (trim($nama) == "")
    $errors[] = "Sila masukkan Nama Pelajar";
if (trim($matrik) == "")
    $errors[] = "Sila masukkan No Matrik";
if (trim($no_tel) == "")
    $errors[] = "Sila masukkan No Telefon";
elseif (!ctype_digit($no_tel))
    $errors[] = "No Telefon mesti mengandungi digit sahaja";
if (trim($tarikh) == "")
    $errors[] = "Sila masukkan Tarikh Permohonan";
if (trim($program) == "")
    $errors[] = "Sila pilih Program Pengajian";
if (trim($jenis) == "")
    $errors[] = "Sila pilih Jenis Laptop Diperlukan";
if (empty($tujuan))
    $errors[] = "Sila pilih Tujuan Penggunaan";
if (trim($alasan) == "")
    $errors[] = "Sila masukkan Alasan Permohonan";
elseif (strlen($alasan) < 25)
    $errors[] = "Alasan Permohonan mesti sekurang-kurangnya 25 aksara";

// Handle errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header("Location: index.php");
    exit();
}

// Save success data
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