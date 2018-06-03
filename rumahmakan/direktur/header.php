<?php
    session_start();
    require"../asset/koneksi.php";
?>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/datatables.css">
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/bootstrap.js"></script>
    <script src="../asset/js/datatables.js"></script>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="#">RM. Maknyuss</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="penghasilan.php">Penghasilan <span class="sr-only">(current)</span></a></li>
                    <li><a href="manajemensdm.php">Manajemen SDM</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-user"></span>
              <?=$_SESSION['nama']?>
              <span class="caret"></span>
            </a>
                        <ul class="dropdown-menu">
                            <li><a href="../">
                <span class="glyphicon glyphicon-log-out"></span>
                Keluar
                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
