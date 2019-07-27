<?php
//mulai proses tambah data

session_start();

require_once "koneksi.php";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	
	return $data;
}

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nim				= $_POST['nim'];
	$nama_anggota		= $_POST['nama_anggota'];
	$divisi				= $_POST['divisi'];		
	$jurusan			= $_POST['jurusan'];
	$prodi				= $_POST['prodi'];
	$notlp				= $_POST['notlp'];
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($conn,"INSERT INTO calonanggota VALUES('', '$nim', '$nama_anggota', '$divisi', '$jurusan', '$prodi', '$notlp')") or die(mysqli_error());

	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tablepelanggan.php">Cek Data</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="pelanggan.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>