<?php
include("../koneksi.php");
session_start();

if(!isset($_SESSION['id'] )){
    if(!isset($_SESSION['status'] )){
        header('location: ../login.php');
    }
}

$validasi = '';

if (isset($_POST['um'])){
    $judul = $_POST['jm'];
    $tanggal = $_POST['tm'];
    $desk = $_POST['desk_materi'];
    $status = $_POST['status_materi'];
    $id = $_POST['id_user'];
    $tujuan = $_POST['tujuan'];

    $direktori = "../img/";
    $file_name = $_FILES['ufm']['name'];
    move_uploaded_file($_FILES['ufm']['tmp_name'],$direktori.$file_name);

    $sql = "INSERT into upload values ('', '$judul', '$tanggal', '$file_name', '$desk', '$status', '$id','$tujuan')";
    $query = mysqli_query($con,$sql);

    if($query){
        echo " <script> 
                alert('File Berhasil diKirim');
                document.location.href = 'upload.php';
                </script>";
    }else {
        echo " <script> 
                alert('File gagal diKirim');
                document.location.href = 'upload.php';
                </script>";
    }
}

else if (isset($_POST['ut'])){
    $judul = $_POST['jt'];
    $tanggal = $_POST['tt'];
    $desk = $_POST['desk_tugas'];
    $status = $_POST['status_tugas'];
    $id = $_POST['id_user'];
    $tujuan = $_POST['tujuan'];

    $direktori = "../img/";
    $file_name = $_FILES['uft']['name'];
    move_uploaded_file($_FILES['uft']['tmp_name'],$direktori.$file_name);

    $sql = "INSERT into upload values ('', '$judul', '$tanggal', '$file_name', '$desk', '$status', '$id','$tujuan')";
    $query = mysqli_query($con,$sql);

    if($query){
        echo " <script> 
                alert('File Berhasil diKirim');
                document.location.href = 'upload.php';
                </script>";
    }else {
        echo " <script> 
                alert('File gagal diKirim');
                document.location.href = 'upload.php';
                </script>";
    }
}

$id_user = $_SESSION['id'];
$sql2 = "SELECT * FROM users WHERE id = '$id_user'";
$query2 = mysqli_query($con, $sql2);
$user = mysqli_fetch_assoc($query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">



</head>
<body style="background-color:#0d5e72;">
     <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark pb-3 " style="background-color:#0695b9;">
            <div class="container-fluid ms-4">
                <a class="navbar-brand fs-3 fw-bold" href="index.php">Teach Us</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fs-5 ms-5">
                        <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="index.php">My Class</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link me-3" href="task.php">Assigment Collection</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active me-3" href="upload.php">Upload</a>
                        </li>
                    </ul>
                </div>
                <div class="text-light fw-bold fs-5">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item">
                            <?php 
                                if(isset($_SESSION['nama'])){
                                    echo $_SESSION['nama']."&nbsp; &nbsp; &nbsp"; 
                                    echo "<img src='../img/".$user['foto']."' class='img-fluid rounded-circle' width='40px' height='auto' alt='foto profil'>";
                                 
                            ?>
                        </li>  
                    </ul>
                </div>
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-secondary " style="padding:0;border:none;background:none;" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi turun bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-6" href="profil.php">My Profil</a></li>
                        <li><a class="dropdown-item fs-6 fw-bold text-danger" href="../logout.php">Logout</a></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- Upload -->
    <div class="text-center fw-bold" style="opacity:70%;color:white;font-size:450%">
        <p>UPLOAD</p>
    </div>
    <div class="upload">
        <!-- form upload materi -->
        <?php if(isset($_POST['upload-materi'])){ ?>

        <form action="" method="post">
            <nav class="nav nav-pills flex-column flex-sm-row mb-5" >
                <input type="submit" name="upload-tugas" class="flex-sm-fill pb-3 text-sm-center nav-link tugas "  style="border:1px solid blue;border-radius:0px" value="UPLOAD TUGAS">
                <input type="submit" name="upload-materi" class="flex-sm-fill text-sm-center nav-link tugas active " style="border:1px solid blue;border-radius:0px" value="UPLOAD MATERI">
            </nav>
        </form>
        <p class="fs-1 text-center" ><b>Upload File Materi</b></p>
        <hr style="color:black; opacity:100%;height:3px"><br><br>
        <form action="" method="post" enctype="multipart/form-data">
           <div class="row">
                <div class="col-3">
                    <label for="jm"><b>Judul</b></label>
                    <input type="text" name="jm" id="jm" class="form-control" >
                </div>
                <div class="col-3">
                    <label for="tm"><b>Tanggal Upload</b></label>
                    <input type="date" name="tm" id="tm" class="form-control" >
                </div>
                <div class="col-3">
                    <label for="tujuan"><b>Pilih Kelas Tujuan</b></label>
                    <select name="tujuan" id="tujuan" class="form-control">
                        <?php
                            $nama= $_SESSION['id'];
                            $sql="SELECT * from bayar where id_guru = '$nama'";
                            $query=mysqli_query($con,$sql);
                            $row=mysqli_num_rows($query);
                            echo "<option></option>";
                            while($tujuan = mysqli_fetch_array($query)){
                                if($row == 0){
                                    echo "<option>Tidak Ada Kelas Terdaftar</option>";
                                }else{
                                    echo "<option>".$tujuan['nama_kelas']."</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="ufm"><b>Upload File</b></label>
                    <input type="file" name="ufm" id="ufm" class="form-control" >
                </div>
           </div><br><br>
           <label for="desk_materi"><b>Deskripsi</b></label>
           <textarea name="desk_materi" id="desk_materi" cols="10" rows="5" class="form-control"></textarea><br>
            <input type="submit" name="um" id="um" value="Kirim" class="form-control btn btn-success" >
            <input type="hidden" name="status_materi" value="materi">
            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
        </form>
        <!-- end form upload materi -->
        <?php }else { ?>
        <!-- form upload tugas -->
        <form action="" method="post">
            <nav class="nav nav-pills flex-column flex-sm-row mb-5" >
                <input type="submit" name="upload-tugas" class="flex-sm-fill pb-3 text-sm-center nav-link active "  style="border:1px solid blue;border-radius:0px" value="UPLOAD TUGAS">
                <input type="submit" name="upload-materi" class="flex-sm-fill text-sm-center nav-link " style="border:1px solid blue;border-radius:0px" value="UPLOAD MATERI">
            </nav>
        </form>
        <p class="fs-1 text-center" ><b>Upload File Tugas</b></p>
        <hr style="color:black; opacity:100%;height:3px"><br><br>
        <form action="" method="post" enctype="multipart/form-data">
           <div class="row">
                <div class="col-3">
                    <label for="jt"><b>Judul</b></label>
                    <input type="text" name="jt" id="jt" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="tt"><b>Tanggal Upload</b></label>
                    <input type="date" name="tt" id="tt" class="form-control" >
                </div>
                <div class="col-3">
                    <label for="tujuan"><b>Pilih Kelas Tujuan</b></label>
                    <select name="tujuan" id="tujuan" class="form-control" required>
                        <?php
                           $nama= $_SESSION['id'];
                           $sql="SELECT * from bayar where id_guru = '$nama'";
                           $query=mysqli_query($con,$sql);
                           $row=mysqli_num_rows($query);
                           echo "<option></option>";
                           while($tujuan = mysqli_fetch_array($query)){
                                if($row == 0){
                                    echo "<option>Tidak Ada Kelas</option>";
                                }else{
                                    
                                    echo "<option>".$tujuan['nama_kelas']."</option>";
                                }
                           }
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="uft"><b>Upload File</b></label>
                    <input type="file" name="uft" id="uft" class="form-control" > 
                </div>
           </div><br><br>
           <!-- <div class="row">
               <span class="fs-5 fw-bold text-primary">Deadline</span><br><br>
                <div class="col-4">
                    <label for="date2"><b>Tanggal</b></label>
                    <input type="date" name="date2" id="date2" class="form-control" >
                </div>
                <div class="col-4">
                    <label for="jam"><b>Waktu</b></label>
                    <input type="time" name="jam" id="jam" class="form-control" >
                </div>
           </div><br><br> -->
           <label for="desk_tugas"><b>Deskripsi</b></label>
           <textarea name="desk_tugas" id="desk_tugas" cols="10" rows="5" class="form-control"></textarea><br>
           <input type="submit" name="ut" id="ut" value="Kirim" class="form-control btn btn-success" >
           <input type="hidden" name="status_tugas" value="tugas">
           <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
        </form>
        <?php } ?>
        <!-- end form upload tugas -->

    </div>
    <!-- end upload -->

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- end javascript -->
    </body>
</html>