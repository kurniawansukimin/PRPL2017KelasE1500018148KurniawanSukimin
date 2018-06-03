<?php
    session_start();
    if(isset($_POST['login'])){
        require"asset/koneksi.php";
        $r=$con->query("select id, password,nama, status from akun where id='{$_POST['username']}' and password='{$_POST['password']}'");
        $q=$r->fetch_assoc();
        if($q){
            if($q['status']=="Direktur"){
                $_SESSION['direktur']=$q['id'];
                $_SESSION['nama']=$q['nama'];
                header("location:direktur");
            }
            else if($q['status']=="Manager"){
                $_SESSION['manager']=$q['id'];
                $_SESSION['nama']=$q['nama'];
                header("location:manager");
            }
            else if($q['status']=="Kasir"){
                $_SESSION['kasir']=$q['id'];
                $_SESSION['nama']=$q['nama'];
                header("location:kasir");
            }
        }
        else{
            $error="username atau password salah";
        }
    }
?>

<link rel="stylesheet" href="asset/css/bootstrap.css">

<body class="container-fluid" style="background:whitesmoke">
    <div class="row" style="margin-top:200px">
        <div class="col-lg-4 col-lg-offset-4" style="padding:30px; background:#eee">
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>User Login</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">Username</div>
                    <div class="col-lg-9">
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>

                <div class="row" style="margin-top:10px; margin-bottom:10px">
                    <div class="col-lg-3">Password</div>
                    <div class="col-lg-9">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-offset-3 col-lg-9">
                        <button type="submit" class="btn btn-primary" name="login">Login</button><br>
                        <?php if(isset($error)) echo "<span style='color:red'>$error</span>"; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
