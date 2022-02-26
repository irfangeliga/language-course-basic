<?php
include("../koneksi.php");
session_start();
$id = $_GET['id'];

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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <title>Dashboard Pelajar</title>
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
                        <a class="nav-link active me-3" href="task.php">Assigment Collection</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link me-3" href="upload.php">Upload</a>
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
                <?php }
                    $sql = "SELECT * FROM kumpul WHERE id_tugas = $id  order by id_kumpul DESC";
                    $query = mysqli_query($con, $sql);
                    $row = mysqli_num_rows($query);
                ?>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- kelas -->
        <div class="materi">
            <br><br><br><br><br>
            <p class="fs-1 fw-bold" style="color:#0d5e72;"><?php echo $row?> Jawaban Terkumpul </p>
        </div><br>
        <?php
            

            if($row > 0){
            while($siswa = mysqli_fetch_array($query)){
        ?>
        <div class="task">
            <div class="row ">
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmarks-fill mt-3" viewBox="0 0 16 16">
                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                        <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
                    </svg>
                </div>
                <div class="col-11">
                    <?php
                        echo "<a href='../img/".$siswa['file']."' class=' text-decoration-none' style='color:#0d5e72;'>";
                        echo "<p class='card-text fs-4 fw-bold'>";
                        echo $siswa['nama']."<br>";
                        echo $siswa['tgl'];
                        echo "</p>";
                        echo "</a>";
                    ?>
                </div>
            </div>
        </div><br>
        <?php 
            }
        } else if($row == 0){
            echo "<div class='alert text-center alert-danger' role='alert'>";
            echo "<h4 class='alert-heading'>Belum Ada Tugas Yang di Kumpulkan</h4>";
            echo "</div>";
        }
        ?>
        <!-- end kelas -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>