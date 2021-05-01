<?php

$Wilayah =$_POST['nmWilayah'];
$Positif =$_POST['jmlPositif'];
$Dirawat =$_POST['jmlDirawat'];
$Sembuh =$_POST['jmlSembuh'];
$Meninggal =$_POST['jmlMeninggal'];
$Operator =$_POST['nmOperator'];
$Mahasiswa =$_POST['nimMahasiswa'];

echo "<h2 align='center'>Data Pemantauan COVID 19 $Wilayah </h2>";
echo "<table align='center'>";
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "<h3 align='center' > Per Tanggal : <b>".date("d-M-Y",$tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=11)){
	echo "<b>, Selamat Pagi</b>";
}
else if(($a>11) && ($a<=15)){
	echo ", Selamat Siang<br>";
}
else if (($a>15) && ($a<=18)){
	echo ", Selamat Malam<br>";
}
echo" Nama Operator : $Operator <br>
NIM Mahasiswa : $Mahasiswa ";
echo "<table align='center'>";
echo "<hr><td><b><H2><p><h2> <font Color='red'>

 Positif	= $Positif
|Dirawat 	= $Dirawat
|Sembuh  	= $Sembuh
|Meninggal  = $Meninggal</td></b></p>";
echo "<table align='center'><b>";
echo "<marquee behavior ='scrool'> Salam Sehat, Sukses, dan Penuh Keberkahan Untuk Kita Semua </marquee>";
?>