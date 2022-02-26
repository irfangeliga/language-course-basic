<?php
include("../koneksi.php");
session_start();

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id' ";
$query = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($query);

$id_user = $_SESSION['id'];
$sql2 = "SELECT * FROM users WHERE id = '$id_user'";
$query2 = mysqli_query($con, $sql2);
$user = mysqli_fetch_assoc($query2);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Teach Us</title>
    <link rel="stylesheet" href="css/styler.css">

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
  <body style="background-color: #2b4292;">
  <section style="background-color: #4e63b4;">
  <nav class="navbar navbar-expand-lg navbar-dark pb-3 " style="background-color:#4E63B4;">
      <div class="container-fluid ms-4">
        <a class="navbar-brand fs-3 fw-bold" href="index.php">Teach Us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav fs-5 ms-5">
            <li class="nav-item">
              <a class="nav-link active  me-3" aria-current="page" href="index.php">Home</a>
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
  </section>
    <div class="container">
      <section class="margin-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar/gbr3-01.jpg" class="d-block w-100" alt="welcome">
            </div>
            <div class="carousel-item">
              <img src="gambar/gbr1-01.jpg" class="d-block w-100" alt="promo">
            </div>
            <div class="carousel-item">
              <img src="gambar/gbr2-01.jpg" class="d-block w-100" alt="testimoni">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <section class="margin-section">
        <a href="#2">
          <img href="#2"src="gambar/sponsor1-01.jpg" class="img-fluid sponsor1" alt="as">
        </a>
      </section>
      <section class="margin-section" id="1">
        <div class="row">
          <div class="col" >
            <div class="card margin-card" style="width: 100%;" id="1">
              <img src="gambar/gold-01.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Expert</h5>
                <p class="card-text">Perdalam bahasa Inggris mu dengan paket English Expert</p>
                <a href="#" class="btn bg-button button-hover">Daftar Sekarang!</a>
              </div>
            </div>
            <div class="card margin-card" style="width: 100%;" id="2">
              <img src="gambar/silver-01.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Japan Expert</h5>
                <p class="card-text">Perdalam bahasa Jepang mu dengan paket Japan Expert</p>
                <a href="#" class="btn bg-button button-hover">Daftar Sekarang!</a>
              </div>
            </div>
            <div class="card margin-card" style="width: 100%;" id="3">
              <img src="gambar/bronze-01.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Indonesian Expert</h5>
                <p class="card-text">Perdalam bahasa Indonesia mu dengan paket Indonesian Expert</p>
                <a href="#" class="btn bg-button button-hover">Daftar Sekarang!</a>
              </div>
            </div>
          </div>
          <div class="col sensei-carousel">
            <div class="d-flex justify-content-end">
              <div id="carouselExampleCaptions" class="carousel slide width-height" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="gambar/gojo-01.jpg" class="d-block w-100" style="height: 700px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Gojo-sensei</h5>
                      <p>Pengajar Bahasa Jepang</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="gambar/koro-01.jpg" class="d-block w-100" style="height: 700px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Koro-sensei</h5>
                      <p>Pengajar Budaya Jepang</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="gambar/kakashi-01.jpg" class="d-block w-100" style="height: 700px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Kakashi-sensei</h5>
                      <p>Pengajar Tata Krama Jepang</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="gambar/ironman-01.jpg" class="d-block w-100" style="height: 700px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Irong-Meng</h5>
                      <p>Pengajar Bahasa Inggris</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="gambar/captain-01.jpg" class="d-block w-100" style="height: 700px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Kapten Indonesia</h5>
                      <p>Musuh Thanos</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section class="margin-section">
        <a href="#1">
          <img src="gambar/sponsor2-01.jpg" class="img-fluid sponsor1" alt="as">
        </a>
      </section>
      <section class="margin-section">
        <h2 class="font-white">Belajar Langsung dari ahli Bahasa</h2>
        <h5 class="font-white2">Dapatkan Tips dan Trick bagaimana cara berbicara menggunakan logat yang anda inginkan</h5>

        <div class="container margin-section">
          <div class="row">
            <div class="col">
              <?php
                if(isset($_SESSION['nama'])){
              ?>
              <a href="product.php" style="text-decoration: none;">
              <?php } else{ ?>
              <a href="../login.php" style="text-decoration: none;">
              <?php } ?>  
                <div class="card sponsor1" style="width: 100%;">
                  <img src="gambar/teacher-card1-01.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-text text-center link-noline">Gojou Satoru</h6>
                    <p class="card-text text-center link-noline">Jujutsu Teacher</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
            <?php
                if(isset($_SESSION['nama'])){
              ?>
              <a href="product.php" style="text-decoration: none;">
              <?php } else{ ?>
              <a href="../login.php" style="text-decoration: none;">
              <?php } ?> 
                <div class="card sponsor1" style="width: 100%;">
                  <img src="gambar/teacher-card2-01.jpg" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h6 class="card-text text-center link-noline">Koro Sensei</h6>
                    <p class="card-text text-center link-noline">Killer Teacher</p></div>
                </div>
              </a>
            </div>
            <div class="col">
            <?php
                if(isset($_SESSION['nama'])){
              ?>
              <a href="product.php" style="text-decoration: none;">
              <?php } else{ ?>
              <a href="../login.php" style="text-decoration: none;">
              <?php } ?> 
                <div class="card sponsor1" style="width: 100%;">
                  <img src="gambar/teacher-card3-01.jpg" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h6 class="card-text text-center link-noline">Kakashi Hatake</h6>
                    <p class="card-text text-center link-noline">Ninja Teacher</p></div>
                </div>
              </a>
            </div>
            <div class="col">
            <?php
                if(isset($_SESSION['nama'])){
              ?>
              <a href="product.php" style="text-decoration: none;">
              <?php } else{ ?>
              <a href="../login.php" style="text-decoration: none;">
              <?php } ?> 
                <div class="card sponsor1" style="width: 100%;">
                  <img src="gambar/teacher-card4-01.jpg" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h6 class="card-text text-center link-noline">Irong Meng</h6>
                    <p class="card-text text-center link-noline">Robot Teacher</p></div>
                </div>
              </a>
            </div>
          </div>
      </section>
      <section class="margin-section">
        <a href="#3">
          <img src="gambar/sponsor3-01.jpg" class="img-fluid sponsor1" alt="as">
        </a>
      </section>
    </div>
    <footer class="margin-section" style="background-color: #4475a5;">
      <div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-5 d-flex justify-content-center mt-3 mb-3">
            <a href="#instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" style="margin: 10px; margin-top: 20px;color:#4475a5;border-radius:8px;" class="bg-light ps-1 pe-1 pt-1 pb-1 bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a>
            <a href="#youtube">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" style="margin: 10px; margin-top: 20px;border-radius:8px;color:#4475a5;" class="bg-light ps-1 pe-1 pt-1 pb-1 bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg>
            </a>
            <a href="#tele">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" style="margin: 10px; margin-top: 20px;border-radius:20px;color:#4475a5;" class=" bg-light ps-1 pe-1 pt-1 pb-1 bi bi-telegram" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
              </svg>
            </a>
            <a href="#whatsap" >
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" style="margin: 10px; margin-top: 20px;border-radius:10px;color:#4475a5;" class="bg-light ps-1 pe-1 pt-1 pb-1 bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
            </a>
            <a href="#twitter">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" style="margin: 10px; margin-top: 20px;border-radius:10px;color:#4475a5;" class="bg-light ps-1 pe-1 pt-1 pb-1 bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
            </a>

          </div>
          <div class="col">
            
          </div>
        </div>
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-5 d-flex justify-content-center">
            <a href="index.php" class="font-white2 fs-5 a" style="margin: 5px;">Home</a>
            <a href="about.php" class="font-white2 fs-5 a" style="margin: 5px;">About</a>
            <?php 
              if(isset($_SESSION['nama'])){
            ?>
            <a href="../register.php" class="font-white2 fs-5 a disabledd" style="margin: 5px;">Register</a>
            <a href="../login.php" class="font-white2 fs-5 a disabledd" style="margin: 5px;" >Login</a>
            <?php } else{ ?>
            <a href="../register.php" class="font-white2 fs-5 a" style="margin: 5px;">Register</a>
            <a href="../login.php" class="font-white2 fs-5 a" style="margin: 5px;" >Login</a>
            <?php } ?>

          </div>
          <div class="col">
            
          </div>
        </div>
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-5 d-flex justify-content-center"  style="margin-bottom: 20px;">
            <div class="font-white2 fs-5">© Teach Us 2077</div>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>