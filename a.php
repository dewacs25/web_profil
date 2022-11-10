<?php
include "db/koneksi.php";
$id = $_GET['id'];
$sqlisi2 = mysqli_query($koneksi, "SELECT * FROM tb_portofolio WHERE id_portofolio='$id'");
$judul = mysqli_fetch_assoc($sqlisi2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/style2.css">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body style="background-color: #0E0B16;">


    <nav class="navbar navbar-expand-lg navbar-dark bg-black header_nav " style="border-bottom: 5px solid indigo; z-index: 100;" id="header">
        <div class="container-fluid">
            <a class="navbar-brand " style="font-family: cursive;" href="#"><b>Rm.Haudy Al-Kautsar</b> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a class="nav-link  " style="color: indigo;" aria-current="page" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " style="color: indigo;" href="index.php#about">About Me</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link " style="color: indigo;" href="index.php#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link  " style="color: indigo;" href="index.php#contac">Contac</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid mb-5" style="margin-top: 40px; ">
        <div class="row">

            <div class="col-lg-7 col-12 ">
                <div class="card " style=" min-height: 28rem; box-shadow: 8px 15px 8px  rgba(75,0,130);">
                    <div class="card-body">
                        <img src="admin/public/img/<?= $judul['gambar'] ?>" class="img-top w-100" alt="">

                        <h2 class="card-title mt-4"><b><?= $judul['judul'] ?></b> <span class="fs-6 opacity-25"><?= $judul['tgl'] ?></span></h2>
                        <br>
                        <span class="card-subtitle mb-2 isiii"><?= $judul['text'] ?></span>
                    </div>
                </div>
            </div>




            <div class="col-lg-5 col-12 ">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-dark">
                                            <h4>Portofolio</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $id = $_GET['id'];
                                    $sqlisimateeri = mysqli_query($koneksi, "SELECT * FROM tb_portofolio WHERE id_portofolio='$id' ");
                                    while ($isi = mysqli_fetch_assoc($sqlisimateeri)) {
                                    ?>
                                        <?php if ($isi['judul'] == $judul['judul']) { ?>
                                            <tr class="text-dark" style="box-shadow: 5px 5px 5px  rgba(75,0,130);">
                                                <td class="rounded"><a class="link-dark text-decoration-none" href="a.php?id=<?= $isi['id_portofolio'] ?>"><?= $isi['judul'] ?></a></td>
                                            </tr>
                                        <?php } else { ?>

                                            <tr class="">
                                                <td><?= $isi['judul'] ?></td>
                                                <td><a href="a.php?id=<?= $isi['id_portofolio'] ?>"><i class="fa-solid fa-circle-play"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- footer -->
    <?php
    include_once "../pages/footer.php";
    ?>

    <script src="asset/js/app.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header").classList.remove('show');
            } else {
                document.getElementById("header").classList.add('show');
            }
            prevScrollpos = currentScrollPos;
        }
    </script>


    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>

</body>

</html>