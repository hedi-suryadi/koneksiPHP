<?php 
$host="localhost";
$user="root";
$password="";
$database="hedi_koneksi_php";

$koneksi = mysqli_connect($host,$user,$password, $database);
//mysql_connect_db($database,$koneksi);


if (mysqli_connect_errno()){
     echo"Gagal Terhubung:".mysqli_connect_error();
}
else{
     echo"Berhasil Terhubung";
}

