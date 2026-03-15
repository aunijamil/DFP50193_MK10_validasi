<!DOCTYPE html>
<html>
<head>
    <title>Borang Permohonan Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

<div class="container">
<h2 class="title">Permohonan Skim Pinjaman Komputer Riba</h2>

<!-- Form start: Sends data to process.php via POST -->
<form class="form" method="POST" action="process.php">

<!-- Personal Details Section -->
<label class="label">Nama Pelajar</label>
<input type="text" name="nama" class="input">

<label class="label">No Matrik</label>
<input type="text" name="matrik" class="input">

<label class="label">Umur</label>
<input type="number" name="umur" class="input">

<label class="label">Tarikh Permohonan</label>
<input type="date" name="tarikh" class="input">

<!-- Program Selection -->
<label class="label">Program Pengajian</label>
<select name="program" class="input">
<option value="">--Sila Pilih--</option>
<option value="Diploma IT">Diploma IT</option>
<option value="Diploma Multimedia">Diploma Multimedia</option>
<option value="Diploma Software">Diploma Software</option>
</select>

<!-- Laptop Type Selection (Radio) -->
<label class="label">Jenis Laptop Diperlukan</label>
<input type="radio" name="jenis" value="Basic" class="radio"> Basic
<input type="radio" name="jenis" value="Standard" class="radio"> Standard
<input type="radio" name="jenis" value="High Performance" class="radio"> High Performance

<br><br>

<!-- Usage Purpose (Checkbox) -->
<label class="label">Tujuan Penggunaan</label>
<input type="checkbox" name="tujuan[]" value="Assignment" class="checkbox"> Assignment
<input type="checkbox" name="tujuan[]" value="Programming" class="checkbox"> Programming
<input type="checkbox" name="tujuan[]" value="Design" class="checkbox"> Design

<br><br>

<!-- Reason for Application -->
<label class="label">Alasan Permohonan</label>
<textarea name="alasan" class="textarea"></textarea>

<br><br>

<!-- Form Actions -->
<button type="submit" class="submit">Hantar</button>
<button type="reset" class="reset">Tetap Semula</button>

</form>
</div>

</body>
</html>