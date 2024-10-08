<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Voting | Login</title>
    <meta name="description" content="Mumbool.com | Created By Josystem, Must Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/icon.png">
    <link rel="shortcut icon" href="images/icon.png"> 

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

        <br><br>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
               
                <div class="login-form">
                     <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="images/evot.png" alt="">
                    </a>
                </div>
                <hr>
                            <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
            }else if($_GET['pesan'] == "logout"){
                echo "<div class='alert alert-danger'>Anda telah keluar.</div>";
            }else if($_GET['pesan'] == "salah"){
                echo "<div class='alert alert-danger'>Anda tidak punya hak.</div>";
            }else if($_GET['pesan'] == "sudahmemilih"){
                echo "<div class='alert alert-danger'>Maaf anda tidak dapat login karena telah memilih.</div>";
            }
            else if($_GET['pesan'] == "belumabsen"){
                echo "<div class='alert alert-danger'>Maaf anda tidak dapat login. Silahkan absen terlebih dahulu.</div>";
            }
            else if($_GET['pesan'] == "terimakasih"){
                echo "<div class='alert alert-success'>Terimakasih telah menggunakan hak pilih.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Silahkan login dulu.</div>";
            }
        }
        ?>
                    <form method="POST" action="<?php echo base_url('Welcome/aksi_login'); ?>">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username/NIS" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">                        
                        <input type="submit" value="Login" class="btn btn-primary"><br><br>
                        <a href="Pengawas/hasilpemilihan" class="btn btn-success" >Melihat Quick Count</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
