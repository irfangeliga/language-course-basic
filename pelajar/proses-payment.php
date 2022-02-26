<?php
      include("../koneksi.php");
      session_start();

      if(isset($_POST['konfirmasi'])){
        $id_mapel = $_POST['id_mapel'];
        $mapel = $_POST['mapel'];
        $teacher = $_POST['teacher'];
        $harga = $_POST['harga'];
        $metode = $_POST['metode'];
        $id_guru = $_POST['id_guru'];
        $id_user = $_POST['id_user'];

        $direktori = "../img/";
        $file_name = $_FILES['bukti']['name'];
        move_uploaded_file($_FILES['bukti']['tmp_name'],$direktori.$file_name);


        $query = "INSERT into bayar values ('','$mapel','$metode','$teacher','$harga','$file_name','$id_guru','$id_mapel','$id_user')";
        $sql= mysqli_query($con,$query);

        if($query){
          echo " <script> 
                  alert('Pembayaran Berhasil');
                  document.location.href = 'payment3.php';
                  </script>";
          }else {
              echo " <script> 
                      alert('Pembayaran Gagal');
                      document.location.href = 'payment2.php';
                      </script>";
          }
      }
               
?>