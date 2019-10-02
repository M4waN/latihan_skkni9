<form>
	Bilangan Primary atau bukan?<br><hr>
	Input Nilai : <input type="number" name="nilai" placeholder="Masukkan nilai"><br>
	<input type="submit" name="proses" value="Proses">


</form>

<?php


if (isset($_GET['proses'])) {
	$nilai = $_GET['nilai'];
	$ganjil = "";
	$genap = "";

	$i= 1;

	$hasil = "";
 		

	
	while ( $i <= $nilai) {
	$j = 1;	
		$pembagi = 0;
		while ($j <= $i) {

			if($i % $j == 0){
				$pembagi += 1;
				$status = "Bilangan Prima";
			}

			$j++;

		}
		

		if($pembagi  == 2){
			$hasil .=  $i . " status : " . $status . "<br>";

		}
		

		else{
			$hasil .=  "<s><b>" . $i. " status : Bukan Bilangan Prima </b></s> <br>";
		}
		
		$i++;

	}

	// if($nilai % $nilai != 0){
	// 	$status = "Bukan bilangan Prima";
	// 	$bukanprima = $nilai . " status : ". $status . "<br>";

	// }

	echo $hasil . $buka;




}

 ?>