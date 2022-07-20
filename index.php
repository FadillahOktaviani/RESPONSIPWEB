<?php
$nama = '';
$email = '';
$nohp = '';
if (isset($_POST['submit'])) {
    // file ini digunakan untuk menyimpan hasil pencarian user ke dalam file txt
    // jika sudah maka tambahkan ke dalam file txt
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    // cek apakah file txt sudah ada?
    if (file_exists("process.txt")) {
        // jika sudah ada, tulis ke dalam file txt
        $file = fopen("process.txt", "a");
        fwrite($file, "\n" . $nama . "|" . $email . "|" . $nohp);
        fclose($file);
    } else {
        // jika belum ada, buat file txt
        $file = fopen("process.txt", "w");
        fwrite($file, $nama . "|" . $email . "|" . $nohp);
        fclose($file);
    }
    // menutup file txt
    echo "<script>alert('Pesanan Anda Berhasil ditambahkan');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>My Kost | Best Kost In Your Life</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->
    <link rel="stylesheet" href="assets/wow/animate.css" />

    <link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">
    <!-- header -->
    <nav class="navbar  navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="holiday crown"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="list.php">Owner</a></li>
                </ul>
            </div><!-- Wnavbar-collapse -->
        </div><!-- container-fluid -->
    </nav>
    <!-- header -->
    <!-- banner -->
    <div class="banner">
        <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">
        <div class="welcome-message">
            <div class="wrap-info">
                <div class="information">
                    <h1 class="animated fadeInDown">Best Kost In Your Life</h1>
                    <p class="animated fadeInUp">Kost ternyaman dengan fasilitas yang telah di sediakan.</p>
                </div>
                <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
            </div>
        </div>
    </div>
    <!-- banner-->

    <!-- reservation-information -->
    <div id="information" class="spacer reserve-info ">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/9.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/10.jpg" class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <h3>Pesan Sekarang</h3>
                    <form id="form" class="wowload fadeInRight" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="Phone" class="form-control" id="nohp" name="nohp" placeholder="Phone">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation-information -->
    <div class="text-center copyright">My Project 2022</div>

    <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

    <script src="assets/jquery.js"></script>
    <!-- wow script -->
    <script src="assets/wow/wow.min.js"></script>
    <!-- boostrap -->
    <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- jquery mobile -->
    <script src="assets/mobile/touchSwipe.min.js"></script>
    <!-- jquery mobile -->
    <script src="assets/respond/respond.js"></script>
    <!-- custom script -->
    <script src="assets/script.js"></script>
    <script>
        // cek apakah user sudah mengisi form
        var nama = document.getElementById('nama');
        var email = document.getElementById('email');
        var nohp = document.getElementById('nohp');
        $('button[name="submit"]').click(function(e) {
            if (nama.value == '') {
                alert('Silahkan isi nama anda');
                nama.focus();
                return false;
            } else if (email.value == '') {
                alert('Silahkan isi email anda');
                email.focus();
                return false;
            } else if (!email.value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
                alert('Email tidak valid');
                email.focus();
                return false;
            } else if (nohp.value == '') {
                alert('Silahkan isi nohp anda');
                nohp.focus();
                return false;
            } else if (!nohp.value.match(/^[0-9]{10,}$/)) {
                alert('Nohp tidak valid');
                nohp.focus();
                return false;
            } else {
                $('#form').submit();
            }
        });

        if ('<?= $nama ?>' != '') {
            document.getElementById('nama').value = '<?= $nama ?>';
        }

        if ('<?= $email ?>' != '') {
            document.getElementById('email').value = '<?= $email ?>';
        }

        if ('<?= $nohp ?>' != '') {
            document.getElementById('nohp').value = '<?= $nohp ?>';
        }
    </script>
</body>

</html>