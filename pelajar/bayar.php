<?PHP 
if(!isset($_SESSION['id'] )){
  if(!isset($_SESSION['status'] )){
      header('location: ../login.php');
  }
}

if(isset($_POST['bayar'])){
    if(isset($_POST['validate'])){
        
    }else{
        echo "<div class='alert alert-danger'>Harus di isi semua</div>";
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
    <!-- JavaScript Bundle with Popper -->
    <title>Teach Us</title>
    <link rel="stylesheet" href="css/styler.css">
  </head>
  <body style="background-color: #2b4292;">
  <!-- Navbar -->
  <section style="background-color: #4e63b4;">
      <nav>
      <div class="row" style="padding-top: 20px;">
        <div class="col d-flex justify-content-center">
          <a href="product.php" class="font-white3 a">< Kembali</a>
        </div>
        <div class="col-5 d-flex justify-content-center">
          <h3 class="font-white3">PEMBAYARAN</h3>
        </div>
        <div class="col">
          
        </div>
      </div>
      </nav>
  </section>
    <!-- Navbar -->
    <h5 class="font-white2 pad-carousel container contain-pay" style="margin-top: 20px">Detail Pembelian</h5>
    <?php if(isset($_POST['jepang'])){ ?>
<div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4;">
     <div class="card bg-product font-black">
       <h1>Japan Kids</h1>
       <div class="card-body" style="background-color: #4475a5;">
         <blockquote class="blockquote mb-0 font-white3">
           <h5>Gohu Satoru</h5>
           <br>
           <h5>Fitur</h5>
           <div>
             <ul class="list-group">
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Sertifikat</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Quiz</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Q&A</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">WA Group</li>
             </ul>
           </div>
         </blockquote>
       </div>
     </div>
   </div>
   <h5 class="font-white2 pad-carousel container contain-pay" style="margin-top: 20px">Pilih Metode Pembayaran</h5>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4; margin-bottom: 20px;">
        <h5 class="font-white3">Pulsa</h5>
      
        
        <form action="konfir.php" method="post">
            <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                <input class="form-check-input" type="radio" name="validate" id="telkomsel" value="Telkomsel">
                <label class="form-check-label" for="flexRadioDefault1">
                <img src="gambar/telkomsel.png" class="img-thumbnail" alt="..." style="width: 100px; margin-top: -6.5px;">
                </label>
            </div>
                <div class="form-check bg-product margin-card" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                    <input class="form-check-input" type="radio" name="validate" id="flexRadioDefault1" value="Indosat" >
                    <label class="form-check-label" for="flexRadioDefault1">
                    <img src="gambar/indosat.png" class="img-thumbnail" alt="..." style="width: 80px; height:40px; margin-top: -6.5px;">
                    </label>
                </div>
                <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                    <input class="form-check-input" type="radio" name="validate" id="flexRadioDefault1" value="Smartfren">
                    <label class="form-check-label" for="flexRadioDefault1">
                    <img src="gambar/smartfren.png" class="img-thumbnail" alt="..." style="width: 100px; margin-top: -6.5px;">
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
                    <p>Rp.80.000</p>
                    <input type="submit" name="bayar" value="bayar" >
                    </div>
                </div>
            </footer>
            </section>
    </form>
    <?php }else if (isset($_POST['jepang2'])) { ?>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4;">
     <div class="card bg-product font-black">
       <h1>Japan Teenegr</h1>
       <div class="card-body" style="background-color: #4475a5;">
         <blockquote class="blockquote mb-0 font-white3">
           <h5>Gohu Satiri</h5>
           <br>
           <h5>Fitur</h5>
           <div>
             <ul class="list-group">
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Sertifikat</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Quiz</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">Q&A</li>
               <li class="list-group-item font-black" style="background-color: #FBFCFB;">WA Group</li>
             </ul>
           </div>
         </blockquote>
       </div>
     </div>
   </div>
   <h5 class="font-white2 pad-carousel container contain-pay" style="margin-top: 20px">Pilih Metode Pembayaran</h5>
    <div class="container contain-pay bg-product pad-all" style="background-color: #4e63b4; margin-bottom: 20px;">
        <h5 class="font-white3">Pulsa</h5>
      
        
        <form action="konfir.php" method="post">
            <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                <input class="form-check-input" type="radio" name="validate" id="telkomsel" value="Telkomsel">
                <label class="form-check-label" for="flexRadioDefault1">
                <img src="gambar/telkomsel.png" class="img-thumbnail" alt="..." style="width: 100px; margin-top: -6.5px;">
                </label>
            </div>
                <div class="form-check bg-product margin-card" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                    <input class="form-check-input" type="radio" name="validate" id="flexRadioDefault1" value="Indosat" >
                    <label class="form-check-label" for="flexRadioDefault1">
                    <img src="gambar/indosat.png" class="img-thumbnail" alt="..." style="width: 80px; height:40px; margin-top: -6.5px;">
                    </label>
                </div>
                <div class="form-check bg-product" style="background-color: #FBFCFB; height: 50px; padding-top: 13px; padding-left: 40px;">
                    <input class="form-check-input" type="radio" name="validate" id="flexRadioDefault1" value="Smartfren">
                    <label class="form-check-label" for="flexRadioDefault1">
                    <img src="gambar/smartfren.png" class="img-thumbnail" alt="..." style="width: 100px; margin-top: -6.5px;">
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
                    <p>Rp.80.000</p>
                    <input type="submit" name="bayar2" value="bayar" >
                    </div>
                </div>
            </footer>
            </section>
    </form>
    <?php } ?>
  
        </div>
        
   
  </body>
</html>