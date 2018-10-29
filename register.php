 <center>
<br><br>
 	<h2> Register</h2>
 		<br>
 <form method="post">
 	<table>
 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td><input type="text" name="username"> </td>
 	</tr>
 	<tr>
 		<td>Password</td>
 		<td>:</td>
 		<td><input type="password" name="password"></td>
 	</tr>
 	<tr>
 		<td>ulang Password</td>
 		<td>:</td>
 		<td><input type="password" name="password2"></td>
 	</tr>
 	<tr>
 		<td><input style="width: 150px" type="submit" name="kirim" value="kirim"></td>
 	</tr>
 </form>
</table>
 </center>
 <?php
include ('koneksi.php');
 if (isset($_POST['kirim'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if ($_POST['password2']==$_POST['password'] ) {

	     $sql = "INSERT INTO user (username, password)
		            VALUES ('$username', '$password')";

		    if (mysqli_query($simpan, $sql)) {
		        header("Location: index.php");
		    }else {
		        echo "Error: " . $sql . "<br?" . mysqli_error($simpan);
		    }
	}else{
		echo "<script>alert('Password yg Anda Masukan Tidak Sama');history.go(-1)</script>";
	}
	    mysqli_close($simpan);
 }

 ?>
