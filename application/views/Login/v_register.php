<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Play Sign In form Responsive Widget Template : W3Layouts</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraplogin.css" type="text/css" media="all" />

    <!-- fontawesome v5-->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="signinform">
        <h1>Play Sign In Form</h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3l_form">
                    <div class="left_grid_info">
                        <img src="<?php echo base_url() ?>assets/images/image.svg" alt="" />
                    </div>
                </div>
                <div class="w3_info">
                    <h2>Sign Up</h2>
                    <form action="#" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Password" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Alamat" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="No Telp" required="">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </form>
           
                    <p class="account">Pesan <a href="<?= base_url('index.php/Login/index'); ?>">Sign In</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2020 Play Sign In form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div>
        <!-- footer -->
    </div>
</body>

</html>