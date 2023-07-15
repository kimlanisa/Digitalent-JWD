<?php
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

if($nama == ""){
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=biodata.php'>";
}else{
    header("Location: detail.php?nama=" . urlencode($nama) . "&jenis_kelamin=" . urlencode($jenis_kelamin) . "&tempat=" . urlencode($tempat) . "&tanggal=" . urlencode($tanggal) . "&umur=" . urlencode($umur) . "&alamat=" . urlencode($alamat));
    exit();
}
?>