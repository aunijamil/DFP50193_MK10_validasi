<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$inputs = $_SESSION['inputs'] ?? [];
unset($_SESSION['errors'], $_SESSION['inputs']);
?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Permohonan Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2 class="title">Permohonan Skim Pinjaman Komputer Riba</h2>

        <?php if (!empty($errors)): ?>
            <div class="error-box">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="process.php">

            <div class="form-group">
                <label class="result-label">Nama Pelajar</label>
                <input type="text" name="nama" class="input-text"
                    value="<?= htmlspecialchars($inputs['nama'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="result-label">No Matrik</label>
                <input type="text" name="matrik" class="input-text"
                    value="<?= htmlspecialchars($inputs['matrik'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="result-label">No Telefon</label>
                <input type="number" name="no_tel" class="input-number"
                    value="<?= htmlspecialchars($inputs['no_tel'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="result-label">Tarikh Permohonan</label>
                <input type="date" name="tarikh" class="input-date"
                    value="<?= htmlspecialchars($inputs['tarikh'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label class="result-label">Program Pengajian</label>
                <select name="program" class="input-select">
                    <option value="">--Sila Pilih--</option>
                    <option value="Diploma IT" <?= ($inputs['program'] ?? '') == 'Diploma IT' ? 'selected' : ''; ?>>Diploma
                        IT</option>
                    <option value="Diploma Multimedia" <?= ($inputs['program'] ?? '') == 'Diploma Multimedia' ? 'selected' : ''; ?>>Diploma Multimedia</option>
                    <option value="Diploma Software" <?= ($inputs['program'] ?? '') == 'Diploma Software' ? 'selected' : ''; ?>>Diploma Software</option>
                </select>
            </div>

            <div class="form-group">
                <label class="result-label">Jenis Laptop Diperlukan</label>
                <input type="radio" name="jenis" value="Basic" class="input-radio" <?= ($inputs['jenis'] ?? '') == 'Basic' ? 'checked' : ''; ?>> Basic
                <input type="radio" name="jenis" value="Standard" class="input-radio" <?= ($inputs['jenis'] ?? '') == 'Standard' ? 'checked' : ''; ?>> Standard
                <input type="radio" name="jenis" value="High Performance" class="input-radio" <?= ($inputs['jenis'] ?? '') == 'High Performance' ? 'checked' : ''; ?>> High Performance
            </div>

            <div class="form-group">
                <label class="result-label">Tujuan Penggunaan</label>
                <input type="checkbox" name="tujuan[]" value="Assignment" class="input-checkbox"
                    <?= in_array('Assignment', $inputs['tujuan'] ?? []) ? 'checked' : ''; ?>> Assignment
                <input type="checkbox" name="tujuan[]" value="Programming" class="input-checkbox"
                    <?= in_array('Programming', $inputs['tujuan'] ?? []) ? 'checked' : ''; ?>> Programming
                <input type="checkbox" name="tujuan[]" value="Design" class="input-checkbox" <?= in_array('Design', $inputs['tujuan'] ?? []) ? 'checked' : ''; ?>> Design
            </div>

            <div class="form-group">
                <label class="result-label">Alasan Permohonan</label>
                <textarea name="alasan"
                    class="input-textarea"><?= htmlspecialchars($inputs['alasan'] ?? ''); ?></textarea>
            </div>

            <button type="submit" class="btn-submit">Hantar</button>
            <button type="reset" class="btn-reset">Tetap Semula</button>

        </form>
    </div>

</body>

</html>