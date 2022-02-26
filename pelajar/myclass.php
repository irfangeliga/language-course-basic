<?php
include("../koneksi.php");
session_start();

// $id = $_GET['id'];
// $sql = "SELECT * FROM bayar WHERE id_user =$id order by id DESC";
// $query = mysqli_query($con, $sql);
$id = $_SESSION['id'];
$sql = "SELECT * FROM bayar WHERE id_user = '$id' order by id DESC";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);

$id_user = $_SESSION['id'];
$sql2 = "SELECT * FROM users WHERE id = '$id_user'";
$query2 = mysqli_query($con, $sql2);
$user = mysqli_fetch_assoc($query2);

if(!isset($_SESSION['id'] )){
  if(!isset($_SESSION['status'] )){
      header('location: ../login.php');
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
              <a class="nav-link active me-3" href="myclass.php">My Class</a>
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
    <div class="text-center fw-bold" style="opacity:70%;color:white;font-size:450%">
      <p>DASHBOARD</p>
    </div>
    <?php
      if($row == 0){
    ?>
      <div class="alert text-center" role="alert">
        <h4 class="alert-heading ">Anda Belum Memiliki Kelas</h4>
        <p>Silahkan Beli Kelas Yang Sesuai Dengan Bidang Yang Ingin Anda Geluti </p>
        <hr>
        <a href="product.php" class="btn btncard btn-light fw-bold btn-lg">Beli Kelas Sekarang</a>
      </div>

    <?php
      }else{
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM bayar WHERE id_user = '$id' order by id DESC";
        $query = mysqli_query($con, $sql);
        while($kelas = mysqli_fetch_array($query)){
    ?>
      <div class="card kelas " >
          <img src="../img/tugas.jpg" class="card-img-top" width="auto" height="150px" alt="foto kelas">
          <div class="card-body">
            
                  <?php
                  echo "<a href='materi.php?id=".$kelas['nama_kelas']."' class=' text-decoration-none' style='color:#2b4292;'>";
                  echo "<p class='card-text fs-5'>Kelas".$kelas['nama_kelas']. "<br>";
                  echo "<b>".$kelas['nama_guru']."</b></p>";
                  
                  ?>
            </a>
          </div>
      </div>
    <?php
        }
      }
    ?><br><br>
    <!-- end kelas -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>