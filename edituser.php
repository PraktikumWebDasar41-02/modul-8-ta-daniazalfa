<?php
include ('koneksi.php');
	$nim     = $_GET['nim'];
    $edituser   = "SELECT * FROM user WHERE nim = '$nim'";
    $sql    = mysqli_query($simpan,$edituser);
    $row    = mysqli_fetch_assoc($sql);
    $ex_username = explode(", ", $row['username']);
    $ex_password = explode(", ", $row['password']);

 ?>
 <center>
 <h2>Edit Data</h2>
    <form method="POST">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
            </tr>
          <tr>
                <td colspan="3"><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</center>
    <?php
    if (isset($_POST['nim'])) {
    $username            = $_POST['username'];
		$password           = $_POST['password'];

        $sql = "UPDATE user SET username='$username', password='$password' WHERE nim='$nim'";

        if (mysqli_query($simpan, $sql)) {
                header("location:dashboard.php");
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($simpan);
        }

        mysqli_close($simpan);
    }
