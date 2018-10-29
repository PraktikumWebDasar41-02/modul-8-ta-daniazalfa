<?php
    require_once("koneksi.php");

    $nim     = $_GET['nim'];
    $delete = "DELETE FROM data WHERE nim='$nim'";

    if (mysqli_query($simpan, $delete)) {
        header("location: dashboard.php");
    }else {
        echo "Error: " . $delete . "<br?" . mysqli_error($simpan);
    }

    mysqli_close($simpan);
?>
