<html>
<head>
<title>Fungsi tanggal dan waktu </title>
</head>
<body>
<?php
date_default_timezone_set('asia/jakarta');
$jam= date("H:i:s A");
$waktu=date ("d-m-Y");
$hari =date("1");
$tanggal = date("d");
$bulan= date("F");
$tahun = date("Y");
echo "Sekarang jam $jam </br>";
echo "sekarang tanggal $waktu </br>";
echo "lebih detailnya hari $hari Tanggal $tanggal Bulan $bulan
tahun $tahun";
?>
</body>
</html>