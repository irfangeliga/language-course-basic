<?php
session_start();
if(!isset($_SESSION['id'] )){
  if(!isset($_SESSION['status'] )){
      header('location: ../login.php');
  }
}
}

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
  <!-- Navbar -->
  <section style="background-color: #4e63b4;">
      <nav>
      <div class="row" style="padding-top: 20px;">
        <div class="col d-flex justify-content-center">

        </div>
        <div class="col-5 d-flex justify-content-center">
          <h3 class="font-white3">VALIDASI</h3>
        </div>
        <div class="col">
          
        </div>
      </div>
      </nav>
  </section>
    <!-- Navbar -->
    <form action="payment3.php" method="post">
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4; margin-bottom: 20px;margin-top: 20px">
    <h1 class="text-center font-white3">Terima Kasih</h1>
    <p  class="text-center fs-5 text-warning">Silahkan Klik Tombol di Bawah Untuk Memulai Kelas Anda</p>
    <p></p>
    </div>

    <section>
      <footer class="navbar navbar-dark fixed-bottom bg-bluee footer-pay" id="mainNav">
        <div class="container d-flex justify-content-center">
          <div class="row">

            <div class="col d-flex justify-content-center font-white">
       
            <a href="../pelajar/myclass.php?id=<?php echo $_SESSION['id']?>" name="dashboard" style='margin-top: -5px' class='btn btn-danger width-btn-bayar'>
            Masuk Dashboard
            </a>
       
            </div>
            <div class="col d-flex justify-content-center font-white">

            </div>
          </div>
        </div>


      </footer>
    </section>
    </form>
  </body>
</html>