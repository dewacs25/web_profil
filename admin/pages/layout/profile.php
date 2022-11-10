<?php
// error_reporting(0);
session_start();

if ($_SESSION['admin'] == "") {
    header("location:../../login/login.php?login_dulu");
}

include "../../../db/koneksi.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | DataTables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="profile.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="portofolio.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Portofolio
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="skil.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Skil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="pesan.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Pesan
                                </p>
                            </a>
                        </li>


                        <li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1></h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Profile</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <?php
                                $sqlProfile = mysqli_query($koneksi, "SELECT * FROM tb_profile");
                                $profile = mysqli_fetch_assoc($sqlProfile);
                                ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $profile['id_profile'] ?>">
                                    <input type="hidden" name="gambarb" value="<?= $profile['gambar'] ?>">


                                    <label for="">Nama</label>
                                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $profile['nama_lengkap'] ?>" />
                                    <br>
                                    <label for="">My Profile</label>
                                    <textarea name="my_profile" class="form-control" id="" cols="20" rows="5"><?= $profile['my_profile'] ?></textarea>
                                    <label for="" class="mt-2">My Professional Skills</label>
                                    <textarea name="my_personal_skil" class="form-control" id="" cols="20" rows="5"><?= $profile['my_personal_skil'] ?></textarea>

                                    <label for="">Foto</label>
                                    <div>
                                        <img src="../../public/img/<?= $profile['gambar'] ?>" alt="none" class="w-25">
                                        <input type="file" name="gambar" accept=".jpg, .png, .JPEG, .JPG, .PNG" class="form-control mt-3">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-warning w-100 mt-3">Simpan</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
</body>

</html>
<?php




if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $my_profile = $_POST['my_profile'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $my_personal_skil = $_POST['my_personal_skil'];

    $foto = $_FILES['gambar']['tmp_name'];
    $namafoto = $_FILES['gambar']['name'];
    $random_string = uniqid();
    $ext = strtolower(end(explode(".", $namafoto)));
    $newnama = $random_string . '.' . $ext;

    $gambarbaru = $_POST['gambarb'];

    if (empty($foto)) {

        $qus = mysqli_query($koneksi, "UPDATE `tb_profile` SET `id_profile`='$id',`nama_lengkap`='$nama_lengkap',`my_profile`='$my_profile',`my_personal_skil`='$my_personal_skil',`gambar`='$gambarbaru' WHERE id_profile='$id'");
        if ($qus) {
            echo "<script>alert('input berhasil');document.location='profile.php'</script>";
        } else {
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    } else {
        unlink('../../public/img/' . $gambarbaru);
        move_uploaded_file($foto, '../../public/img/' . $newnama);

        $sql = mysqli_query($koneksi, "UPDATE `tb_profile` SET `id_profile`='$id',`nama_lengkap`='$nama_lengkap',`my_profile`='$my_profile',`my_personal_skil`='$my_personal_skil',`gambar`='$newnama' WHERE id_profile='$id'");
        if ($sql) {
            echo "<script>alert('input berhasil');document.location='profile.php'</script>";
        } else {
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    }
}

?>