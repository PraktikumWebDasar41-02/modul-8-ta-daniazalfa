<?php
    require_once("koneksi.php");

    $nim     = $_GET['nim'];
    $delete = "DELETE FROM user WHERE nim='$nim'";

    if (mysqli_query($simpan, $del)) {
        header("location: dashboard.php");
    }else {
        echo "Error: " . $del . "<br?" . mysqli_error($simpan);
    }

    mysqli_close($simpan);
?>
