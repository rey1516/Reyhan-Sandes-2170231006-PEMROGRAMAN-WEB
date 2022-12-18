<!-- @AdityaDees, Original Script -->
<fieldset>
<legend>Menghitung Persegi Panjang</legend>
<form action="" method="GET">
<table>
	<tr>   
 	<td>Panjang</td> 
	<td>:</td>
    <td><input type="text" name="panjang" /></td>
	</tr>

	<tr>
    	<td>Lebar</td> 
		<td>:</td>
        <td><input type="text" name="lebar" /></td>
	</tr>
	
	<tr>
   		<td><input type="submit" value="hitung" name="hitung"/></td>
	</tr>
</table>
</form>

<?php
	if (isset($_GET['hitung'])){
	$panjang = $_GET['panjang'];
	$lebar = $_GET['lebar'];

	function luas ($panjang,$lebar) 
			{
	$luas = $panjang *$lebar ;
	echo ("Jadi Luas Persegi Panjang adalah : ".$luas);
				}
	luas($panjang,$lebar);
	}
?>
</fieldset>
