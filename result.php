<?php
session_start();

if (!isset($_SESSION['success_data'])) {
    header("Location: index.php");
    exit();
}

$data = $_SESSION['success_data'];
unset($_SESSION['success_data']);
?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2 class="title">Semakan Permohonan</h2>

        <div class="success-box">Permohonan berjaya dihantar</div>

        <div class="result-box">

            <div class="result-item">
                <div class="result-label">Nama Pelajar</div>
                <div class="result-value"><?= $data['nama']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">No Matrik</div>
                <div class="result-value"><?= $data['matrik']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">No Telefon</div>
                <div class="result-value"><?= $data['no_tel']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Tarikh Permohonan</div>
                <div class="result-value"><?= $data['tarikh']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Program Pengajian</div>
                <div class="result-value"><?= $data['program']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Jenis Laptop</div>
                <div class="result-value"><?= $data['jenis']; ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Tujuan Penggunaan</div>
                <div class="result-value"><?= implode(', ', $data['tujuan']); ?></div>
            </div>

            <div class="result-item">
                <div class="result-label">Alasan Permohonan</div>
                <div class="result-value"><?= $data['alasan']; ?></div>
            </div>

        </div>

        <a href="index.php" class="link">Kembali ke Borang Permohonan</a>
    </div>

</body>

</html>