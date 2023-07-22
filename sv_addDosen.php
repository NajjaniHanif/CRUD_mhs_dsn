
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$digit=$_POST["digit"];
$tahun=$_POST["tahun"];
$namadosen=$_POST["namadosen"];
$homebase=$_POST["homebase"];
$nppgabung="0686.11.$tahun.$digit";
$uploadOk=1;
//Untuk pembuatan npp yang baru diperlukannya $nppgabung untuk mendapatkan data tahun dan 3 digit di belakang npp dan menggabungkannya untuk memperoleh data npp yang utuh

// Check jika terjadi kesalahan
if ($uploadOk == 0) {
    echo "Maaf, file tidak dapat terupload<br>";
// jika semua berjalan lancar
} else {        
        //membuat query
		$sql="insert dosen values('$nppgabung','$namadosen','$homebase')";
		mysqli_query($koneksi,$sql);
		header("location:addDosen.php");
}
?>