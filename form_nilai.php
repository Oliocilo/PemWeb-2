<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="dataForm" method="post" action="proses_data.php">
  <!-- Input untuk data kendaraan -->
  <input type="text" name="NomorPolisi" placeholder="Nomor Polisi">
  <input type="text" name="Merk" placeholder="Merk">
  <input type="text" name="Pemilik" placeholder="Pemilik">
  <select name="Status">
    <option value="Dosen">Dosen</option>
    <option value="Mahasiswa">Mahasiswa</option>
  </select>

  <!-- Tambahkan tombol untuk menambahkan baris baru jika diperlukan -->
  <!-- Contoh: -->

  <!-- Tombol submit -->
  <button type="submit">Kirim</button>
</form>
</body>
</html>