<?php 
if (empty($_POST['nama'])) {
	header("Location:latihan10_kosong.php");
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>