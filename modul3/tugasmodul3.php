<form action='tugasmodul3.php' method="post">
	<p>Nilai A adalah <input type="text" name="NilaiA"></p>
	<p>Nilai B adalah <input type="text" name="NilaiB"></p>
	<input type='submit' name='Jumlahkan' value='Jumlahkan'>
</form>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$NilaiA = $_POST["NilaiA"];
$NilaiB = $_POST["NilaiB"];
$Jumlahkan = $_POST["Jumlahkan"];

if($Jumlahkan){
$Jumlahkan = $NilaiA+$NilaiB;
	echo "Nilai A adalah $NilaiA </br>"; 
	echo "Nilai B adalah $NilaiB </br> "; 
	echo "Jadi Nilai A ditambah Nilai B adalah $Jumlahkan";
}
?>