<center>
	<h1>Profile</h1>
 <table border="2" width="50%" style="text-align: center;">
 	<tr>
 		<th>Username</th>
 		<th>Password</th>
		<th>Aksi</th>
 	</tr>
 	<?php
 	include("koneksi.php");
 	$sql = "SELECT * FROM user";
 	$result = mysqli_query($simpan, $sql);
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>
 				<tr>
 				<td><?php echo $row['username']?></td>
 				<td><?php echo $row['password']?></td>
				<td><a href="del.php?nim=<?php echo $row['nim']; ?>"> Hapus</a> </td>
				<td> <a href="edituser.php?nim=<?php echo $row['nim']; ?>"> Edit user</a></td>
 				</tr>
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}
 		mysqli_close($simpan);
 	?>
 </table>

 <a href="dashboard.php">DASHBOARD</a>
 </center>
