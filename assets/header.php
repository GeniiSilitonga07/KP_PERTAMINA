<!DOCTYPE html>
<html lang="en">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="css/agency.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="">PT. PERTAMINA RU IV</a>
            <ul class="navbar-nav ml-auto">
              <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="data_barang.php">Data Barang</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="rev_transaksi.php">Review Transaksi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="process_logout.php">Logout</a>
                </li>
                <?php } elseif (isset($_SESSION['role']) && $_SESSION['role'] == 2) { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="data_barang.php">Data Barang</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="rev_transaksi.php">Review Transaksi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="process_logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
        </nav>

