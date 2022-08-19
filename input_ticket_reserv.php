<!doctype html>
<html>
<head>
       <title>Pembelian Tiket Kereta</title>
</head>
<body>
<form action="outputtiket.php" method="POST">
<pre>
PEMBELIAN TIKET KERETA API
Id Pemesanan : <input type="text" name="id">
Nama Pemesan : <input type="text" name="nama">
Alamat       : <textarea name="alamat" cols="17" rows="4"></textarea>
Tujuan       : <select name="jenis">
               <option value="">- PILIH -
               <option value="JJ">Jkt - Jogja
               <option value="JB">Jkt - Brebes
               <option value="JBD">Jkt - Bandung
               </select>
Jenis Kereta : <input type="radio" name="tipe" value="Ekonomi">Ekonomi
               <input type="radio" name="tipe" value="Bisnis">Bisnis
               <input type="radio" name="tipe" value="Executive">Executive
Jumlah Tiket : <input type="text" name="jumlah">
<br>
<input type="submit" value="Daftar"> <input type="reset" value="Batal">
</body>
</html>
