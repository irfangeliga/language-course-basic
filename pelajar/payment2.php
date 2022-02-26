<!doctype html>
<?php
      session_start();
      $conn = mysqli_connect("localhost","root","","teachus_db");

        $jenis_pembayaran=$_POST['validate'];

      if($jenis_pembayaran=='BNI'){
        $conn = mysqli_connect("localhost","root","","teachus_db");

        $query = "UPDATE chart SET MetodePembayaran='BNI' WHERE chart_id='CH01'";
        $sql = mysqli_query($conn,$query) or die("cek : pokoke error, cek phpadmin ");
      }
      else if($jenis_pembayaran=='BRI'){
        $conn = mysqli_connect("localhost","root","","teachus_db");

        $query = "UPDATE chart SET MetodePembayaran='BRI' WHERE chart_id='CH01'";
        $sql = mysqli_query($conn,$query) or die("cek : pokoke error, cek phpadmin ");
      }
      else if($jenis_pembayaran=='BCA'){
        $conn = mysqli_connect("localhost","root","","teachus_db");

        $query = "UPDATE chart SET MetodePembayaran='BCA' WHERE chart_id='CH01'";
        $sql = mysqli_query($conn,$query) or die("cek : pokoke error, cek phpadmin ");
      }
      else if($jenis_pembayaran=='Mandiri'){
        $conn = mysqli_connect("localhost","root","","teachus_db");

        $query = "UPDATE chart SET MetodePembayaran='Mandiri' WHERE chart_id='CH01'";
        $sql = mysqli_query($conn,$query) or die("cek : pokoke error, cek phpadmin ");
      }

      
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
      <div class="row " style="padding-top: 20px;margin-left:none;">
        <div class="col d-flex justify-content-center">
          <a href="product.php" class="fs-6 btn btn-outline-light fw-bold">Kembali</a>
        </div>
        <div class="col-5 d-flex justify-content-center">
          <h3 class="font-white3">VALIDASI</h3>
        </div>
        <div class="col">
          
        </div>
      </div><br>
      </nav>
  </section>
    <!-- Navbar -->
    <form action="proses-payment.php" method="post" enctype="multipart/form-data">
    <h5 class="font-white3 pad-carousel container contain-pay" style="margin-top: 20px">Pembayaran</h5>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4; margin-bottom: 20px;">
    <h5 class="font-white3"><?php echo $_POST['validate'] ?></h5> 
    <p class="text-center fs-3 bg-product" style="background-color: white; font-weight: bolder;">
      <?php 
        if($jenis_pembayaran=="BNI"){
      ?>
      08087676
      <?php } else if($jenis_pembayaran=="BRI"){ ?>
      12341234
      <?php } else if($jenis_pembayaran=="BCA"){ ?>
      1223123123123123123123
      <?php } else if($jenis_pembayaran=="Mandiri"){ ?>
      57567567567567
      <?php } ?>
    </p>
    <p>
    <ul>
      <li class="font-white3">Segera lakukan pembayaran dalam 1x24 jam</li>
      <li class="font-white3">Masukkan kode pembayaran sesuai dengan nomor yang tertera di atas </li>
      <li class="font-white3">Kelas Pengajaran akan langsung tampil ketika proses pembayaran sudah ter-validasi</li>
      <li class="font-white3">Kode pembayaran akan langsung terbakar jika tidak ter-validasi dalam kurun waktu 1x24 jam</li>
      <li class="font-white3">JANGAN TINGGALKAN HALAMAN INI SEBELUM PEMBAYARAN TERKONFIRMASI</li>
      <li class="font-white3">Upload bukti transfer di bawah</li>
    </ul>
    </p>
    <p class="bg-product" style="background-color: white; padding-left:20px; height:40px; padding-top:5px">
      <input type="file" id="bukti" name="bukti" required>    
    </p>

    <input type="hidden" value="<?php echo $_POST['id_mapel'] ?>" name="id_mapel">
    <input type='hidden' name='mapel' value='<?php echo $_POST['mapel'] ?>'>
    <input type='hidden' name='teacher' value='<?php echo $_POST['teacher'] ?>'>
    <input type='hidden' name='harga' value='<?php echo $_POST['harga'] ?>'>
    <input type='hidden' value='<?php echo $_POST['id_user'] ?>' name='id_guru'>
    <input type="hidden" value="<?php echo $jenis_pembayaran ?>" name="metode">
    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="id_user">
  
    </div>

    <section>
      <footer class="navbar navbar-dark fixed-bottom bg-bluee footer-pay" id="mainNav">
        <div class="container d-flex justify-content-center">
          <div class="row">

            <div class="col d-flex justify-content-center font-white">
              <input type="hidden" name="id" placeholder="">

            <button type="submit" name="konfirmasi" style='margin-top: -5px' class='btn btn-danger width-btn-bayar'>
            KONFIRMASI
            </button>
       
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