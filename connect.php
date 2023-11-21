<?php
$connect = mysqli_connect("localhost", "root", "", "2106065_abdusyukur");

if ($connect) {
    echo"<script> alert('Koneksi DATABASE Gagal'); </script>";
}
?>