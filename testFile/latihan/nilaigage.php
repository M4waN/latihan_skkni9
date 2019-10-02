<div class="container">
	
	<form method="POST">
	Ganjil atau Genap?<br><hr>
	Input Nilai : <input type="number" name="nilai" placeholder="Masukkan nilai"><br>
	<!-- <input type="text" name="page" value="<?php echo substr($_SERVER['REQUEST_URI'], 25); ?>"> -->
	<input type="submit" name="proses" value="Proses">


</form>

<?php
session_start();
$_SESSION['title'] = "Pengelompokkan ganjil atau genap?";

if (isset($_POST['proses'])) {
	$nilai = $_POST['nilai'];
	$ganjil = "";
	$genap = "";


	for ($i=0; $i <= $nilai ; $i++) { 
		
		if($i % 2 == 0){
			$genap = $genap . " " . $i;
			
		}
		else{
			$ganjil = $ganjil . " " . $i;
			
		}
		
	}
	echo "Ganjil = " . $ganjil . "<br>";
		echo "Genap = " . $genap . "<br>";


	// $proses = $nilai / 2;
	// if ($proses == 1) {
	// 	$jenisangka = "Genap";
	// }
	// elseif {

	// }
}

 ?>

</div>