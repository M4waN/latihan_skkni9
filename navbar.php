<!-- Image and text --> 
<?php include_once "function.php"?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="logo-bpptik-02-big.png" height="30" class="d-inline-block align-top" alt="">
    
  </a>

   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  
      
      <li class="nav-item dropdown">
      	<?php
      		$namafolder = "latihan";

      	 ?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo ucwords($namafolder)?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

        	<?php 
        	$jumlah_array = count(bacaFolder($namafolder));
        		for($i=2; $i< $jumlah_array; $i++)
				  {
				   $nama_file = bacaFolder($namafolder);
				   $nomor = $i - 1;
				   

			?>

			<!-- <a href='$nama_file[$i]'>$nama_file[$i]</a> (". round(filesize($nama_file[$i])/1024,1) . "kb)<br/>"; -->
			<a class="dropdown-item" href="index.php?page=<?php echo $namafolder. "/" .$nama_file[$i] ?>"><?php  echo ucwords(substr($nama_file[$i], 0 , -4  )) ?></a>
				
			<?php }

        	?>

        </div>
      </li>
    </ul>
  </div>


</nav>


