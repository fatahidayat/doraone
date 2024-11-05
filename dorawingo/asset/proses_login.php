<?php 
include("koneksi.php"); 
session_start();
$email = $_POST["email"]; // ambil nilai dari input dengan name email 
$password = $_POST["password"]; // ambil nilai dari input dengan name password

$query = mysqli_query( $koneksi, "select * from user where email='$email'");

$jumlah_data = mysqli_num_rows($sql); // cek ada berapa jumlah data tersebut 

// jika data nya ada atau lebih dari 0 
if($jumlah_data > 0){ 
    $data = mysqli_fetch_array($query);
    // bisa login
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role']; 

    header("Location : index.php");

    echo "Anda Terdaftar, Selamat Datang";
}else{ 
    // jika tidak ada 
    header("Location : login.php?error=username atau password salah");
}

?>
