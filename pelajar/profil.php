<?php
include("../koneksi.php");
session_start();

if(!isset($_SESSION['id'] )){
  if(!isset($_SESSION['status'] )){
      header('location: ../login.php');
  }
}

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id' ";
$query = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($query);

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $id_user = $_POST['id'];
    
    $direktori = "../img/";
    $file_name = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

        if(empty($file_name )){
            $sql = "UPDATE users SET nama ='$nama', username ='$username' , email = '$email'  WHERE id = $id_user";
            $query = mysqli_query($con, $sql);
        }else{
            $sql = "UPDATE users SET nama ='$nama', username ='$username' , email = '$email' , foto = '$file_name'  WHERE id = $id_user";
            $query = mysqli_query($con, $sql);
        }
        
    // apakah query update berhasil?
    if( $query ) {

        echo "<script> 
        document.location.href = 'profil.php';
            alert('Data berhasil disimpan!');
           
           
            </script>";
    } else {
        echo "<script> 
        document.location.href = 'profil.php';
            alert('Data gagal disimpan!');
            </script>";
    }

}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styler.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard Pelajar</title>

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
  <body>
    <!-- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark pb-3 " style="background-color:#4E63B4;">
      <div class="container-fluid ms-4">
        <a class="navbar-brand fs-3 fw-bold" href="index.php">Teach Us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav fs-5 ms-5">
            <li class="nav-item">
              <a class="nav-link me-3" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="contact.php">Contact Us</a>
            </li>
            <?php
              if(isset($_SESSION['nama'])){
            ?>
            <li class="nav-item">
              <a class="nav-link me-3" href="myclass.php">My Class</a>
            </li>
          </ul>
        </div>
        <div class="text-light fw-bold fs-5">
          <?php
              echo "<ul class='navbar-nav'>";
              echo "<li class='nav-item'>";  
              echo $_SESSION['nama']."&nbsp; &nbsp; &nbsp;"; 
              echo "<img src='../img/".$user['foto']."' class='img-fluid rounded-circle' width='45px' height='auto' >";
              echo "</li>";
            ?>
           
              <li class="btn-group dropstart nav-item ms-2">
                <button type="button" class="btn btn-secondary " style="padding:0;border:none;background:none;" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi turun bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                  </svg>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item fs-6" href="profil.php">My Profil</a></li>
                  <li><a class="dropdown-item fs-6 fw-bold text-danger" href="../logout.php">Logout</a></li>
                </ul>
              </li>
            <?php echo "</ul>";} ?>
        </div>
        
        <?php
             if(!isset($_SESSION['nama'])){
                echo "<div class='text-end'>";
                echo "<a href='../login.php' class='btn login text-light btn-lg' >Login</a>";
                echo "</div>";
             }  
        ?>   
      </div>
    </nav>
      <!-- end navbar -->

      <!-- kelas -->
      <div> 
            <div class="text-center fw-bold" style="opacity:70%;color:white;font-size:450%">
                <p >MY PROFIL</p>
            </div>
            <div class="profil">
                <div class="text-center">
                    <img src="../img/<?php echo $user['foto'] ?>" width="28%" height="auto" style="border:3px solid #0695b9;" class="img-fluid rounded-circle" alt="foto-profil">
                </div><br><br><br><br><br><br><br><br>
                <div class="fw-bold fs-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php if(isset($_POST['edit'])){ ?>

                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-2">
                                <p>Nama Lengkap</p>
                                <p>Username</p>
                                <p>Alamat Email</p>
                                <p>Password</p>
                                <p>Ubah Foto Profil</p>
                            </div>
                         
                                <div class="col-4">
                                    <input type="text" id="nama" name="nama" class="form-control mb-2" value="<?php echo $user['nama'] ?>" >
                                    <input type="text" id="username" name="username" class="form-control mb-2" value="<?php echo $user['username'] ?>" >
                                    <input type="email" id="email" name="email" class="form-control mb-2" value="<?php echo $user['email'] ?>" >
                                    <input type="text" name="password" id="password" class="form-control" value="<?php echo $user['password'] ?>" >
                                    <input type="file" name="foto" class="form-control"><span style="color:red;font-size:13px;font-weight:lighter;">*Pastikan foto telah berbentuk persegi atau bundar</span>
                                    <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                    <div class="text-end">
                                        <br><br>
                                        <input type="submit" value="Simpan" class="btn btn-success pe-4 ps-4 fw-bold fs-5" name="simpan">
                                    </div>
                                </div>
                           
                            <div class="col-2"></div>
                        </div>
                        <?php }else if (!isset($_POST['edit'])){ ?>
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-2">
                                    <p>Nama Lengkap</p>
                                    <p>Username</p>
                                    <p>Alamat Email</p>
                                    <p>Password</p>
                                </div>
                                <div class="col-4">
                                    <input type="text" id="nama" name="nama" class="form-control mb-2" value="<?php echo $user['nama'] ?>" disabled>
                                    <input type="text" id="username" name="username" class="form-control mb-2" value="<?php echo $user['username'] ?>" disabled>
                                    <input type="email" id="email" name="email" class="form-control mb-2" value="<?php echo $user['email'] ?>" disabled>
                                    <input type="text" name="password" id="password" class="form-control" value="<?php echo $user['password'] ?>" disabled>
                                    <div class="text-end">
                                        <br><br>
                                        <input type="submit" value="Edit Profile" class="btn btn-primary pe-4 ps-4 fw-bold fs-5" name="edit">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>  
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- end kelas -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>