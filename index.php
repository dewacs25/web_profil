<?php
include "db/koneksi.php";

$sqlKontak = mysqli_query($koneksi, "SELECT * FROM tb_kontak");
$kontak = mysqli_fetch_assoc($sqlKontak);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/style2.css">
    <link rel="stylesheet" href="plugins/f/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="" style="background-color: #0E0B16;" id="home">

    <div class="sosial text-light t ">

        <a href="https://wa.me/+62<?= substr($kontak['no_wa'], 1, 15) ?>?text=Hallo" class="wa text-light"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="<?= $kontak['url_facebook'] ?>" class="fb text-light"><i class="fa-brands fa-facebook"></i></a>
        <a href="<?= $kontak['url_instagram'] ?>" class="ig text-light"><i class="fa-brands fa-instagram"></i></a>


    </div>
    <div class="sosialKanan text-light t">

        <a href="<?= $kontak['url_github'] ?>" class="dc text-light"><i class="fa-brands fa-github"></i></a>
        <a href="<?= $kontak['url_linkedin'] ?>" class="lk text-light"><i class="fa-brands fa-linkedin"></i></a>
        <a href="<?= $kontak['url_twitter'] ?>" class="tw text-light"><i class="fa-brands fa-twitter"></i></a>

    </div>




    <nav class="navbar navbar-expand-lg navbar-dark bg-black header_nav animate__animated animate__fadeInDown" style="border-bottom: 5px solid indigo; z-index: 100;" id="header">
        <div class="container-fluid">
            <a class="navbar-brand " style="font-family: cursive;" href="#"><b>Rm.Haudy Al-Kautsar</b> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a class="nav-link  " style="color: indigo;" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " style="color: indigo;" href="#about">About Me</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " style="color: indigo;" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link  " style="color: indigo;" href="#contac">Contac</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="card text-bg-dark" style="min-height: 100vh; max-height: 100vh; ">

        <img src="asset/img/gambar4.jpeg" class="card-img animate__animated animate__fadeInUp opacity-25" alt="" style="min-height: 100vh; max-height: 100vh; background-color: black;">

        <div class="card-img-overlay position-absolute top-50 start-50 translate-middle text-center text-light w-100">
            <h5 class="animate__animated animate__fadeInUp">Hi, I am </h5>
            <h1 class="animate__animated animate__fadeInUp" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>RM.HAUDY AL-KAUTSAR</b></h1>
            <h4 class="typewrite text-white mb-3" data-period="1000" data-type='[ "I am a Programmer","I am a Student","I am Animelovers" ]'>

            </h4>
            <a href="https://wa.me/+62<?= substr($kontak['no_wa'], 1, 15) ?>?text=Hallo" class="p-2 pb-2 link-light border border-1 rounded-circle"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="<?= $kontak['url_instagram'] ?>" class="p-2 pb-2 link-light border border-1 rounded-circle"><i class="fa-brands fa-instagram"></i></a>
            <a href="<?= $kontak['url_twitter'] ?>" class="p-2 pb-2 link-light border border-1 rounded-circle"><i class="fa-brands fa-twitter"></i></a>
            <a href="<?= $kontak['url_facebook'] ?>" class="p-2 pb-2 link-light border border-1 rounded-circle"><i class="fa-brands fa-facebook"></i></a>
            <a href="<?= $kontak['url_linkedin'] ?>" class="p-2 pb-2 link-light border border-1 rounded-circle"><i class="fa-brands fa-linkedin"></i></a>

            <h3 class="mt-5 berkedip"><a href="#about" class="down text-light"><i class="fa-solid fa-angles-down"></i></a></h3>
        </div>

    </div>


    <div class="container-xl">
        <h3 class="text-center text-white" id="about">ABOUT ME </h3>
        <hr class="text-light w-50 ms-auto me-auto">
        <div class="row">

            <div class="col-lg-4 col-12">
                <div class="card bg-transparent border-0 text-light">

                    <div class="card-body">
                        <h5 class="card-title ">My Profile</h5>
                        <p><?= $profile['my_profile'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card bg-transparent border-0 text-light">
                    <img src="admin/public/img/<?= $profile['gambar'] ?>" class="card-img-top rounded-circle w-50 d-flex ms-auto me-auto" alt="...">
                    <h4 class="text-center mt-2"><?= $profile['nama_lengkap'] ?></h4>
                    <div class="card-body text-center">

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card bg-transparent border-0 text-light">

                    <div class="card-body">
                        <h5 class="card-title ">My Professional Skills</h5>
                        <p><?= $profile['my_personal_skil'] ?></p>

                        <?php
                        $sqlSkil = mysqli_query($koneksi, "SELECT * FROM tb_skil");
                        while ($row = mysqli_fetch_assoc($sqlSkil)) {
                        ?>
                            <label class="mt-2" for=""><?= $row['nama_skil'] ?> :</label>
                            <div class="progress ">
                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="background: rgba(76, 0, 130, 100); width: <?= $row['presentase'] ?>%;" aria-valuenow="<?= $row['presentase'] ?>" aria-valuemin="0" aria-valuemax="100"><?= $row['presentase'] ?>%</div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg2 text-light p-2">
        <div class="container">
            <h3 class="text-center" id="portofolio">Portofolio</h3>
            <hr>

            <div class="row">

                <?php
                $halaman = 3; /* page halaman*/
                $page = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
                $mulai = ($halaman * $page) - $halaman;

                $result = mysqli_query($koneksi, "SELECT * FROM tb_portofolio ");
                $total = mysqli_num_rows($result);
                $pages = ceil($total / $halaman);

                $sqlPortofolio = mysqli_query($koneksi, "SELECT * FROM tb_portofolio ORDER BY gambar DESC LIMIT $mulai, $halaman ");


                while ($rows = mysqli_fetch_assoc($sqlPortofolio)) {

                ?>
                    <div class="col-lg-4 col-12">
                        <div class="card card-blog" style="box-shadow: -5px 15px 10px  rgba(75,0,130);">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="admin/public/img/<?= $rows['gambar'] ?>"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="table">
                                <!-- <h6 class="category text-dark"><i class="fa fa-university"></i> Law</h6> -->
                                <h4 class="card-caption">
                                    <a href="a.php?id=<?= $rows['id_portofolio'] ?>"><?= $rows['judul'] ?></a>
                                </h4>
                                <p class="card-description"><?= substr($rows['text'], 0, 223) ?></p>
                                <div class="ftr">
                                    <!-- <div class="author">
                                    <a href="#"> <img src="http://adamthemes.com/demo/code/cards/images/avatar3.png" alt="..." class="avatar img-raised"> <span>Mary Dunst</span> </a>
                                </div> -->
                                    <div class="stats"> <i class="fa fa-clock-o"></i> <?= $rows['tgl'] ?> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="no mt-2 justify-content-center d-flex">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        <?php

                        if ($page == 1) {
                        ?>

                            <li class="page-item"><a class="page-link text-dark ">Previous</a></li>

                        <?php
                        } else {
                            $LinkPrev = ($pages > 1) ? $page - 1 : 1;
                        ?>


                            <li class="page-item"><a class="page-link text-dark" href="index.php?halaman=<?php echo $LinkPrev; ?>#portofolio">Previous</a></li>

                        <?php
                        }
                        ?>
                        <?php
                        for ($i = 1; $i <= $pages; $i++) {
                        ?>
                            <?php
                            if (($i >= $page - 2) && ($i <= $page + 2)) { ?>
                                <?php if ($i == $page) : ?>


                                    <li class="page-item"><a class="page-link active bg-dark border-dark" href="index.php?halaman=<?php echo $i; ?>#portofolio"><?php echo $i; ?></a></li>
                                <?php else : ?>


                                    <li class="page-item"><a class="page-link text-dark" href="index.php?halaman=<?php echo $i; ?>#portofolio"><?php echo $i; ?></a></li>

                                <?php endif; ?>
                            <?php } ?>


                        <?php } ?>
                        <?php
                        if ($page == $pages) {
                        ?>
                            <li class="page-item"><a class="page-link text-dark">Next</a></li>
                        <?php
                        } else {
                            $linkNext = ($page < $pages) ? $page + 1 : $total;
                        ?>
                            <li class="page-item"><a class="page-link text-dark" href="index.php?halaman=<?php echo $linkNext; ?>#portofolio">Next</a></li>

                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



    <div class="container p-5 text-light" id="contac">
        <h3 class="text-center ">SAY HELLO TO ME</h3>
        <hr>
        <div class="row mt-5">

            <div class="col-lg-5 col-12">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-text-light border-0" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input required type="text" name="username" class="form-control rounded-0" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-text-light border-0" id="basic-addon1">@</span>
                        <input required type="text" name="email" class="form-control rounded-0 " placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                        <textarea required class="form-control" name="isi" aria-label="With textarea"></textarea>
                    </div>

                    <button type="submit" name="kirim" class="btn btn-secondary mt-3 rounded-4 ps-4 pe-4">Kirim</button>

                </form>
            </div>

            <div class="col-lg-7 col-12">
                <div class="card text-dark">
                    <div class="card-header">
                        <h5 class="text-center"><b>Kontak Saya</b></h5>
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-location-dot" style="color: indigo;"></i> Alamat
                                <p>Jln rasamala bla bla bla</p>
                            </div>
                            <div class="col-6">
                                <i class="fa-solid fa-phone" style="color: indigo;"></i> No Hp
                                <p><?= $kontak['no_hp'] ?></p>
                            </div>
                            <div class="col-6">
                                <i class="fa-solid fa-envelope" style="color: indigo;"></i> Email
                                <p><?= $kontak['email'] ?></p>
                            </div>
                            <div class="col-6">
                                <i class="fa-brands fa-github" style="color: indigo;"></i> Github
                                <p>dewacs25</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="mt-5 text-light">
        <hr>
        <div class="container">

            <p class="opacity-50">Copyright © 2022 Haudy </p>
        </div>
    </footer>




    <script src="asset/js/app.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        setInterval(function() {
            $(".berkedip").toggle();
        }, 100);
    </script>



</body>

</html>

<?php
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

function get_client_browser()
{
    $browser = '';
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
        $browser = 'Netscape';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
        $browser = 'Chrome';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
        $browser = 'Opera';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
        $browser = 'Internet Explorer';
    else
        $browser = 'Other';
    return $browser;
}



$browser = get_client_browser();
// var_dump($browser);
$os = $_SERVER['HTTP_USER_AGENT'];

$ip = get_client_ip();
$irr = rand();

$selecSql = mysqli_query($koneksi, "SELECT * FROM tb_akses WHERE ip='$ip' AND browser='$browser' AND os='$os'");
$selec = mysqli_fetch_assoc($selecSql);

if ($selec['ip'] == $ip && $selec['browser'] == $browser && $selec['os'] == $os) {
} else {

    $masuk = mysqli_query($koneksi, "INSERT INTO `tb_akses`(`id_akses`, `ip`, `browser`, `os`) VALUES ('$irr','$ip','$browser','$os')");
}





if (isset($_POST['kirim'])) {
    $nama = $_POST['username'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];
    $ir = rand();
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('Y-m-d H:i:s');


    $sqlPesan = mysqli_query($koneksi, "INSERT INTO `tb_pesan`(`id_pesan`, `nama`, `email`, `isi`, `tgl`) VALUES ('$ir','$nama','$email','$isi','$tgl')");
    if ($sqlPesan) {
        echo "<script>alert('Pesan Terkirim'); document.location='index.php#contac'</script>";
    }
}
?>