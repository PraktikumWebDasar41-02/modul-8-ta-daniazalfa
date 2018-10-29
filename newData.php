<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<h1 style="color: pink">New Data</h1>
	<form method="POST">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email"><br>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
 					 <input type="checkbox" name="hobi[]" value="musik">musik<br>
 					 <input type="checkbox" name="hobi[]" value="nyanyi"> nyanyi<br>
 				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td> <input type="checkbox" name="genre[]" value="Horor"> Horor<br>
 					 <input type="checkbox" name="genre[]" value="Anime"> Anime<br>
 					 <input type="checkbox" name="genre[]" value="Action"> Action<br>
					 <input type="checkbox" name="genre[]" value="drama"> drama<br>
 				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td> <input type="checkbox" name="wisata[]" value="Bali"> Bali<br>
 					 <input type="checkbox" name="wisata[]" value="Tanjungselor"> Tanjung Selor<br>
 					 <input type="checkbox" name="wisata[]" value="jakarta"> jakarta<br>
					 <input type="checkbox" name="wisata[]" value="Lombok"> lombok<br>
 				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
	</form>
</body>

</html>
<?php


	if (isset($_POST['nim'])) {

	    $nim       = $_POST['nim'];
	    $nama        = $_POST['nama'];
	    $tgl_lahir	= $_POST['tgl_lahir'];
	    $email  	= $_POST['email'];
	    $kelas		= $_POST['kelas'];
	    $list_hobi 	= implode(", ",$_POST['hobi']);
	    $list_genre = implode(", ", $_POST['genre']);
	    $list_wisata = implode(", ", $_POST['wisata']);

	    $sql = "INSERT INTO data (nim, nama,tgl_lahir, email, kelas, hobi, genre, wisata)
	            VALUES ('$nim', '$nama','$tgl_lahir', '$email', '$kelas', '$list_hobi', '$list_genre', '$list_wisata')";

	    if (mysqli_query($simpan, $sql)) {
	        header("location: dashboard.php");
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($simpan);
	    }


	    mysqli_close($simpan);
	}

?>
