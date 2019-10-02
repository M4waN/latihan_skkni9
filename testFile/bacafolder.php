<?php
// $folder = "./"; //Sesuaikan Folder nya

function bacaFolder($folder){

if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

$file_array = array();
while($baca_folder = readdir($buka_folder))
 {
 $file_array[] = $baca_folder;
 }
// $jumlah_array = count($file_array);
//  echo $jumlah_array;
return $file_array;






closedir($buka_folder);

}

// $jumlah bacaFolder("./");


// bacaFolder("./");
$jumlah_array = count(bacaFolder("latihan"));
// echo $jumlah_array;
for($i=2; $i< $jumlah_array; $i++)
  {
   $nama_file = bacaFolder("latihan");
   $nomor = $i - 1;
   echo "<a href='$nama_file[$i]'>$nama_file[$i]</a> (". round(filesize($nama_file[$i])/1024,1) . "kb)<br/>";
 }

?>