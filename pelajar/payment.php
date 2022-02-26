<!doctype html>
<?php
      
      include("../koneksi.php");
      session_start();

      // if(isset($_POST['bayar'])){
      //   if(isset($_POST['validate'])){
      //     header('location: payment2.php');
          
      //   }
      //   else{
      //     echo "<div class='alert alert-danger'>Harus di isi semua</div>";
      //   }
      // }

      if(!isset($_SESSION['id'] )){
        if(!isset($_SESSION['status'] )){
            header('location: ../login.php');
        }
    }

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
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
      <nav><br>
      <div class="row" >
        <div class="col d-flex justify-content-center">
          <a href="product.php" class="fs-6 btn btn-outline-light fw-bold">Kembali</a>
        </div>
        <div class="col-5 d-flex justify-content-center">
          <h3 class="font-white3">PEMBAYARAN</h3>
        </div>
        <div class="col">
          
        </div>
      </div><br>
      </nav>
  </section>
    <!-- Navbar -->
    <h5 class="font-white2 pad-carousel container contain-pay" style="margin-top: 20px">Detail Pembelian</h5>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4;">
      <div class="card bg-product font-black">
         
          <?php
          
            if(isset($_POST['jepang_kids']) ){
            $query = "SELECT * from prodak where id = '1' ";
            $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
            $row = mysqli_fetch_assoc($kelas);
            
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['jepang_teen']) ){
              $query = "SELECT * from prodak where id = '2' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              
                echo '<h4 class="card-header" style="background-color: #FBFCFB;">
                Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
              } 
              else if(isset($_POST['jepang_expert']) ){
                $query = "SELECT * from prodak where id = '3' ";
                $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
                $row = mysqli_fetch_assoc($kelas);
                
                  echo '<h4 class="card-header" style="background-color: #FBFCFB;">
                  Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
                } 
                else if(isset($_POST['inggris_kids']) ){
              $query = "SELECT * from prodak where id = '4' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['inggris_teen']) ){
              $query = "SELECT * from prodak where id = '5' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['inggris_expert']) ){
              $query = "SELECT * from prodak where id = '6' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['indo_kids']) ){
              $query = "SELECT * from prodak where id = '7' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['indo_teen']) ){
              $query = "SELECT * from prodak where id = '8' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
            else if(isset($_POST['indo_expert']) ){
              $query = "SELECT * from prodak where id = '9' ";
              $kelas = mysqli_query($con,$query) or die("cek : pokoke error, cek phpadmin ");
              $row = mysqli_fetch_assoc($kelas);
              echo '<h4 class="card-header" style="background-color: #FBFCFB;">
              Kelas Bahasa - '.$row['nama_kelas'].'</h4>';
            }
          ?>
        
        <div class="card-body" style="background-color: #4475a5;">
          <blockquote class="blockquote mb-0 font-white3">
            <h5>Teacher</h5>
            <?php
              echo '<div>'.$row['nama_guru'].'</div>';
            ?>
            <br>
            <h5>Fitur</h5>
            <div>
              <ul class="list-group">
                <li class="list-group-item font-black" style="background-color: #FBFCFB;">Sertifikat</li>
                <li class="list-group-item font-black" style="background-color: #FBFCFB;">Quiz</li>
                <li class="list-group-item font-black" style="background-color: #FBFCFB;">Q&A</li>
                <li class="list-group-item font-black" style="background-color: #FBFCFB;">WA Group</li>
                <li class="list-group-item font-black" style="background-color: #FBFCFB;">Les 2x Dalam Seminggu selama 3 Bulan </li>
              </ul>
            </div>
          </blockquote>
        </div>
      </div>
    </div>
    <form action="payment2.php" method="post">
    <h5 class="font-white2 pad-carousel container contain-pay" style="margin-top: 20px">Pilih Metode Pembayaran</h5>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4; margin-bottom: 120px;">
    <h5 class="font-white3">Transfer Bank</h5>
      <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
        <input class="form-check-input" type="radio" name="validate" id="bni" value="BNI" required>
        <label class="form-check-label" for="flexRadioDefault1">
          <img src="gambar/bni.png" class="img-thumbnail" alt="..." style="width: 80px; margin-top: -6.5px;">
        </label>
      </div>
      <div class="form-check bg-product margin-card" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
        <input class="form-check-input" type="radio" name="validate" value="BRI" id="bri">
        <label class="form-check-label" for="flexRadioDefault1">
        <img src="gambar/bri.png" class="img-thumbnail" alt="..." style="width: 100px; height:40px; margin-top: -6.5px;">
        </label>
      </div>
      <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
        <input class="form-check-input" type="radio" name="validate" value="BCA" id="bca">
        <label class="form-check-label" for="flexRadioDefault1">
          <img src="gambar/bca.png" class="img-thumbnail" alt="..." style="width: 100px; margin-top: -6.5px;">
        </label>
      </div>
      <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
        <input class="form-check-input" type="radio" name="validate" value="Mandiri" id="Mandiri">
        <label class="form-check-label" for="flexRadioDefault1">
          <img src="gambar/mandiri.png" class="img-thumbnail" alt="..." style="width: 90px; margin-top: -6.5px;">
        </label>
      </div>
  </div>
    <section>
      <footer class="navbar navbar-dark fixed-bottom bg-bluee footer-pay" id="mainNav">
        <div class="container d-flex justify-content-center">
          <div class="row">
            <div class="col d-flex justify-content-center font-white" style="width: 800px">
              <h3>Total Pembayaran</h3>
            </div>
            <div class="col d-flex justify-content-center font-white">
            <?php
              echo '<h3>Rp. '.$row['harga'].'</h3>';
              echo "<input type='hidden' value='".$row['id']."' name='id_mapel'>";
              echo "<input type='hidden' name='mapel' value='". $row['nama_kelas']."'>";
              echo "<input type='hidden' name='teacher' value='". $row['nama_guru']."'>";
              echo "<input type='hidden' name='harga' value='".$row['harga']."'>";
              echo "<input type='hidden' value='".$row['id_guru']."' name='id_user'>";
            ?>
            </div>
            <div class="col d-flex justify-content-center font-white">
            <button type="submit" name="bayar" style='margin-top: -5px' class='btn btn-danger width-btn-bayar'>
            Bayar
            </button>
            </div>
          </div>
        </div>
      </footer>
      </form>
    </section>
  </body>
</html>