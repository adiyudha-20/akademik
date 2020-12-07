<?php 
//    $hapus=$mysqli->query("select*from pelajaran where kd_pelajaran='$_GET[kd_pelajaran]'");
//     // memilih gambar untuk dihapus
//     $nama_foto=mysqli_fetch_array($hapus);
//     // nama field gambar
//     $lokasi=$nama_foto['foto'];
//     // script delete gambar dari folder
//     unlink($hapus_foto);
    $kd_pelajaran = isset($_GET['kd_pelajaran']) ? $_GET['kd_pelajaran'] :"";
    // var_dump($kd_pelajaran);die;
    $mysqli->query("DELETE FROM pelajaran WHERE kd_pelajaran='$kd_pelajaran'") OR die(mysqli_error($mysqli));
    header('location:?pel=read_pelajaran');
?>