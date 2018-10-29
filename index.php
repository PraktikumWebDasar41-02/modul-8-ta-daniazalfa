 <center>
<br><br>
 	<h2> Login</h2>
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
 		<td><input style="width: 150px" type="submit" name="kirim" value="Login"></td>
 	</tr>
  <tr>
    <td><a href="register.php">Create User</a></td>
  </tr>
</table>
</form>
</center>
<?php
	if (isset($_POST['kirim'])) {
		session_start();
		include("koneksi.php");
		@$username = $_POST["username"]; //dania
		@$password = $_POST["password"]; //6701174129

		$sql = "SELECT * from user where username = '$username' and password = '$password'";
		$result = mysqli_query($simpan, $sql);

		if (mysqli_num_rows($result) != 0) {
			header("Location: dashboard.php");
		}else {
			echo "Login Gagal";
		}
	}

?>
