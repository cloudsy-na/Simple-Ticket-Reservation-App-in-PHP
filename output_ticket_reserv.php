<!doctype html public>
<html>
<head>
      <title>PEMBELIAN TIKET KERETA API</title>
</head>
<body>
<?php
     $id=$_POST['id'];
     $nama=$_POST['nama'];
     $alamat=$_POST['alamat'];
     $jenis=$_POST['jenis'];
     $tipe=$_POST['tipe'];
     $jumlah=$_POST['jumlah'];


if ($jenis=="JJ"){
    $nama1="Jakarta - Yogyakarta";
    $waktu="17.00 - 23.00 WIB";
    }
else if($jenis=="JB"){
    $nama1="Jakarta - Brebes";
    $waktu="13.00 - 19.00 WIB";
    }
else {
    $nama1="Jakarta - Bandung";
    $waktu="10.00 - 13.00 WIB";
    }

if ($tipe=="Ekonomi"){
    $harga=175000;
    }
else if ($tipe=="Bisnis"){
    $harga=250000;
    }
else {
    $harga=400000;
    }
$totalharga=$jumlah*$harga;

if ($jumlah >= 5){
    $diskon=0.05 * $harga;
    }
else{
    $diskon=0;
    }
   
$totalbayar=$totalharga-$diskon;

?>

<pre>
Id pemesanan     : <?php echo $id ; ?> <br>
Nama Pemesanan   : <?php echo $nama ; ?> <br>
Alamat           : <?php echo $alamat ; ?> <br>
Kode Tujuan      : <?php echo $jenis ; ?> <br>
Nama Tujuan      : <?php echo $nama1 ; ?> <br>
Waktu            : <?php echo $waktu ; ?> <br>
Jenis Kereta     : <?php echo $tipe ; ?> <br>
Harga            : <?php echo "Rp.".number_format($harga) ; ?> <br>
Jumlah Beli      : <?php echo $jumlah ; ?> <br>
Diskon           : <?php echo "Rp.".number_format($diskon) ; ?> <br>
---------------------------------------------
Total Bayar      : <?php echo "Rp.".Number_format($totalbayar) ; ?> <br>
---------------------------------------------

<a href="inputtiket.php">INPUT DATA LAGI </a>

</body>
</html>
