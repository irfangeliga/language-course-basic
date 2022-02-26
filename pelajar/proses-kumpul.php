<?php
include("../koneksi.php");

if(isset($_POST['jawab'])){
    $nama = $_POST['user_name'];
    $id = $_POST['user_id'];
    $judul = $_POST['judul'];
    $tgl = $_POST['tgl'];
    $tujuan = $_POST['tujuan'];
  
    $direktori = "../img/";
    $file_name = $_FILES['jawaban']['name'];
    move_uploaded_file($_FILES['jawaban']['tmp_name'],$direktori.$file_name);
  
    $sql = "INSERT into kumpul values ('', '$nama', '$id', '$file_name', '$judul', '$tgl','$tujuan')";
    $query = mysqli_query($con,$sql);
  
      if($query){
          echo " <script> 
                  alert('File Berhasil diKirim');
                  document.location.href = 'materi.php?id=".$tujuan."';
                  </script>";
      }else {
          echo " <script> 
                  alert('File gagal diKirim');
                  document.location.href = 'detail.php';
                  </script>";
      }
  
  }
?>