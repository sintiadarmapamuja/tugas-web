<html><body>
<?php
$NAMA = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["NAMA"]) && isset($_POST["NIM"])) {
$NAMA = $_POST["NAMA"];
$NIM = $_POST["NIM"];
}
?>
<h2>BELAJAR VALIDITAS PHP </h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>Nama : <input type="text" name="NAMA"><br></td>
		</tr>
		<tr>
			<td>NIM : <input type="text" name="NIM"><br></td>
		</tr>

	</table>
<input type="submit">
</form>
<?php
if(empty($NAMA) && empty($NIM) ){
echo "Nama Dan Nama Harus Di isi Dengan Lengkap :) ";

}
else if (!is_numeric($_POST["NIM"])){
	echo "NIM HARUS BERUPA ANGKA";
}
else if(strlen($_POST["NIM"])!=10){
	echo "PANJANG NIM 10 KARAKTER ";
}
else if(!empty($NAMA) && !empty($NIM) ){
echo "Nama Anda Adalah ". $NAMA . " dan " . "Nim Anda Adalah ". $NIM;
}
?>
</body></html>