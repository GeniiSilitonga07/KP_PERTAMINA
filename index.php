<?php
    include_once('config/database.php');
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="icon" href="images/pertamina.jpg">
        <title>PT. PERTAMINA RU IV</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="css/agency.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center" style="margin-top:200px; margin-bottom: 85px">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="proses_login.php" method="POST">
                    <img class="rounded-circle w-50 mx-auto d-block" src="images/pertamina.jpg"><br>
                    <h1 class="h5 mb-3 font-weight-normal">Sistem Informasi Gudang IT PT.PERTAMINA RU IV</h1><br>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <input type="password" name="password" class="form-control" style="margin-top:10px" placeholder="Password" required autofocus><br><br>
                    <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Masuk" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>