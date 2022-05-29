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
                    <h3><center>Login form</center></h3>
                    <form class="" action="" method="post">
                        <div class="form-group">
                            <label class="form-label text-primary">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-primary">Possword:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group pt-3">
                            <center><button type="submit" class="btn bg-primary">Log In</button></center>
                            
                        </div>
                        <div><a href="login.php">Create an account</a></div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </section>
    </div>
</body>
</html>