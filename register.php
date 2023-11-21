<?php
    include './connect.php';
    $NIK = $_POST['NIK'];
    $no_tlp = $_POST['no_tlp'];
    $no_kk = $_POST['no_kk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO register(NIK, nama, alamat, no_tlp, no_kk) VALUES('$NIK','$nama', '$alamat', '$no_tlp', '$no_kk')";


    mysqli_query($connect, $query);


    header("Location:./index.php");

    exit;


?>