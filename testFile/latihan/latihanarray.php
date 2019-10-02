<form method="POST"> 
Jumlah input suhu <input type="number" name="jis"> <input type="submit" name="pjis" value="Proses">

</form>
<form method="POST"> 

<?php 

if (!empty($_POST['jis']) ) {
	for ($i=1; $i <= $_POST['jis'] ; $i++) { 

	$no = $i;
	echo $no . ". ";


	?>
	Suhu <input type="number" name="suhu[]" placeholder="masukkan ukuran suhu"><br>
<?php
	
	}
	

?>

	<input type="submit" name="hitung" value="hitung">
</form>

<?php
	
}

if (isset($_POST['suhu'])) {

	$total = 0;
	
	$suhu = $_POST['suhu'];
	// echo count($suhu)-1;


	for ($i=0; $i <= count($suhu)-1 ; $i++) { 
		
		$total = $total + $suhu[$i] ;

	}

	$rata= $total / count($suhu);

	echo "<br>Rata-rata suhu = " . $rata;
	echo "<br>Suhu tertinggi = " . max($suhu);
	echo "<br>Suhu terendah  = " . min($suhu);

}

 ?>