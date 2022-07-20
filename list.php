<?php
// baca data yang ada pada file process.txt
$file = fopen("process.txt", "r");
$data = file_get_contents("process.txt");
fclose($file);
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
                    <li><a href="index.php">Home</a></li>
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
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    </th>
                </thead>
                <tbody>
                    <?php
                    // membaca data dari file process.txt
                    $data = explode("\n", $data);
                    foreach ($data as $value) {
                        // menampilkan data dari file process.txt
                        $data_user = explode("|", $value);
                        echo "<tr>";
                        echo "<td>" . $data_user[0] . "</td>";
                        echo "<td>" . $data_user[1] . "</td>";
                        echo "<td>" . $data_user[2] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
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
</body>

</html>