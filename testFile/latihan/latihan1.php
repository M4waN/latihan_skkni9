
<div class="container">
<form method="POST">

<div class="form-group row">
	<label class="col-sm-3">Nama Peserta</label>
	<div class="col-sm-9">
		<input type="text" name="np" placeholder="Masukkan nama peserta" required>
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-3">Nilai Ujian Praktek</label>
	<div class="col-sm-9">
		<input type="number" name="up" placeholder="Masukkan nilai ujian Praktek" required>
	</div>
</div>
	<div class="form-group row">
		<label class="col-sm-3">Nilai Ujian Pilihan Ganda</label>
		<div class="col-sm-3">
			<input type="number" name="upg" placeholder="Masukkan nilai ujian pilihan ganda" required><br>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-3">Jumlah Kehadiran</label>
		<div class="col-sm-9">
			<input type="number" name="k" placeholder="Masukkan jumlah kehadiran" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-3">Nilai Sikap</label>
		<div class="col-sm">
			<input type="number" name="s" placeholder="Masukkan nilai Sikap" required>
		</div>
	</div>
	<input type="submit" name="submit" value="Proses nilai">
	

</form>



<?php 



if (isset($_POST['submit'])) {
	$np = $_POST['np'];
	$up = $_POST['up'];
	$upg = $_POST['upg'];
	$k = $_POST['k'];
	$s = $_POST['s'];


	if (is_numeric($up) && is_numeric($upg) && is_numeric($k) && is_numeric($s) ) {

			if ( $up >= 0 && $upg >= 0 && $k >= 0 && $s >= 0 && $up <= 100 && $upg <= 100 && $k <= 100 && $s <= 100) {
		
			$na = (0.6*$up)+(0.3*$upg)+(0.05*$k)+(0.05*$s);

					if ($na >= 90 && $na <= 100) {
						$predikat = "Baik Sekali";
					}
					elseif ($na >= 80 && $na < 90) {
						$predikat = "Baik";
					} 
					elseif ($na >= 65 && $na < 80) {
						$predikat = "Cukup";
					}
					elseif ($na < 65){
						$predikat = "Tidak Lulus";

					}
?>

			<br>
			<br>
			<hr>
			<br>
			<br>Berikut Nilai Akhir Evaluasi Pelatihan adalah <br>
			<table class="table">
				<tr>
					<th>Nama Peserta</th>
					<th>Nilai Akhir</th>
					<th>Predikat</th>
				</tr>

				<tr>
					<td><?php echo $np ?></td>
					<td><?php echo $na ?></td>
					<td><?php echo $predikat ?></td>
				</tr>

			</table>

			
<?php

			}

			else {
				echo '<script type="text/javascript">';
				echo 'alert("input nilai Error!!! note: pastikan nilai 0-100")';
				echo '</script>';
				// echo "input nilai Error!!! note: pastikan nilai 0-100";

			}
			

	}
	else {
		echo "<script type='text/javascript'>$('.alert').alert()</script>";

	}


	




}
?>
</div>


</body>
</html>