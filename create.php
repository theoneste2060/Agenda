<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <section>
            <div class="row" style='height:20vh;'></div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="card col-md-4">
                    <h6><center>I can't wait to create account!</center></h6>
                    <form action="insert.php" method="post">
                        <div class="text-success">
                            <h6>
                            <center>
                                <?php
                                if(isset($_SESSION['create_success']))
                                echo $_SESSION['create_success'];
                                ?>
                            </center>
                            </h6>
                        </div>
                        <div class="text-danger">
                            <h6>
                            <center>
                                <?php
                                if(isset($_SESSION['create_failed']))
                                echo $_SESSION['create_failed'];
                                ?>
                            </center>
                            </h6>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-primary">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-primary">Possword:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group pt-3">
                            <center><button type="submit" class="btn bg-primary">Create</button></center>
                            
                        </div>
                        <div><a href="login.php"> Have an account? SIGN IN</a></div>
                    </form>
                    <?php
                    session_destroy();
                    ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </section>
    </div>
</body>
</html>