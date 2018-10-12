<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
	include"koneksi.php";
	if ($koneksi) {
		
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$jk=$_POST['jk'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$password=$_POST['password'];

		$query = mysql_query($koneksi,"SELECT * FROM datauser WHERE nim ='$nim'");
		$row=mysql_fetch_row($query);
		$cari = strpos($nama, is_numeric($nama));

		if (strlen($nama)<35) {
			if (strlen($nim)==10 && is_numeric($nim)==TRUE) {
				
			$sql = $koneksi->query("
			INSERT INTO 'datauser' (`nim`,`nama`,`kelas`,`jk`,`hobi`,`fakultas`,`alamat`,`password`)
			VALUES(`$nim`,`$nama`,`$kelas`,`$jk`,`$hobi`,`$fakultas`,`$alamat`,`$password`)");

			echo "<h1> Selamat Registrasi Berhasil</h1><br>";
			echo "Silahkan Melakukan Login <a href='login.php'><input type='submit' values='hal login'></a>";
			}
			else{
				echo "nim harus 10 karakter berupa angka";
			}
		}
		else{
			echo "nama harus 35 karakter";
		}
	}
	else{
		echo "registrasi gagal";
	}
}
 ?>