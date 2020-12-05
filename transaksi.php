<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <title>Akademik - Transaksi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <?php 
      session_start();
      if($_SESSION['status']!="login"){
        header("location:index.php?pesan=belum_login");
      }
    ?>

    <div id="wrapper">

      <nav class="navbar navbar-light bg-info">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">SMP MUARA ILMU</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="nav-link" href="masterdata.php">Master Data</a></li>
            <li><a class="nav-link" href="transaksi.php">Transaksi</a></li>
            <li><a class="nav-link" href="laporan.php">Laporan</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="logout.php">LOGOUT</a></button></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<pre>
          <center>
          <H1><a class="nav-link" href="transaksi/nilai/index.php">TRANSAKSI NILAI</a></H1>

          <H1><a class="nav-link" href="transaksi/jadwal/index.php">TRANSAKSI JADWAL</a></H1>








          </center> 
</pre>

      <nav class="navbar navbar-light bg-info">
      <a class="navbar-brand" href="index.php"></a>

      </nav>

      


    </div>
    
  </body>
</html>