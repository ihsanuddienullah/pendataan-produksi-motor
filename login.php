<!DOCTYPE html>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" type="text/css" href="css/login.css">
        <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div class="box">
                            <div class="shape1"></div>
                            <div class="shape2"></div>
                            <div class="shape3"></div>
                            <div class="shape4"></div>
                            <div class="shape5"></div>
                            <div class="shape6"></div>
                            <div class="shape7"></div>
                            <div class="float">
                                <form class="form" action="ceklogin.php" method="post">
                                    <div class="form-group">
                                        <label for="username" class="text-white">Username:</label><br>
                                        <input type="text" name="user" id="user" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-white">Password:</label><br>
                                        <input type="password" name="pass" id="pass" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                    </div>
                                </form>
                                <br>
                                <br>
                                <?php
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "gagal"){
                                        ?> <center class="justify-content-center text-center"><?php echo "<script>alert('Login gagal! Username atau Password salah');history.go(-1);</script>";?></center><?php
                                    }
                                    else if($_GET['pesan'] == "logout"){
                                        ?> <center class="justify-content-center text-center"><?php echo "Anda telah berhasil logout";?></center><?php
                                    }
                                    else if($_GET['pesan'] == "belum_login"){
                                        ?> <center class="justify-content-center text-center"><?php echo "<script>alert('Anda belum login!');history.go(-1);</script>";?></center><?php
                                    }
                                }
                                ?>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
    </body>
    </html>    
        