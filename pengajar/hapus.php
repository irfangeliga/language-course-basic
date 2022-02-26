<?php

include("../koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM upload WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( $query ){

    echo "<script> 
        document.location.href = 'index.php?id='
            alert('Data berhasil dihapus!')
            </script>";

    } else {
        echo "<script> 
        document.location.href = 'index.php';
            alert('Data Gagal diHapus!');
            </script>";

    }

} else {
    die("akses dilarang...");
}

?>