<?php
function validasi(){

}

function bacaFolder($folder){

if(!($buka_folder = opendir($folder))) die ("eRorr... Tidak bisa membuka Folder");

$file_array = array();
while($baca_folder = readdir($buka_folder))
 {
  $file_array[] = $baca_folder;
 }
 return $file_array;

//
closedir($buka_folder);

}

?>