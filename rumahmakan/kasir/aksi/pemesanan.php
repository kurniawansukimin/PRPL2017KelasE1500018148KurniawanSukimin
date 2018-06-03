<?php
session_start();
    require"../../asset/koneksi.php";
    
    if(isset($_POST['simpan'])){
        $menu = $_POST['menu'];
        $kasir = $_POST['kasir'];
        $namapemesan = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $tanggalbayar = $_POST['tanggalbayar'];
        
        if (empty($menu) || empty($namapemesan) || empty($tanggal) || empty(tanggalbayar)){
            echo "<strong> Data harus di isi dengan lengkap.</strong>";   
        }else{
           $q=$con->query("insert into pemesanan values('','{$_POST['menu']}','{$_SESSION['kasir']}','{$_POST['nama']}','{$_POST['tanggal']}','{$_POST['tanggalbayar']}')");
            header("location:../pemesanan.php");
        }
    }

    else if(isset($_GET['hapus'])){
        $q=$con->query("delete from pemesanan where id='{$_GET['hapus']}'");
        header("location:../pemesanan.php");
    }
    
    else if(isset($_POST['ubah'])){
        $q=$con->query("update pemesanan set menu='{$_POST['menu']}', nama='{$_POST['nama']}', tanggal='{$_POST['tanggalbayar']}'");
        header("location:../pemesanan.php");
    }
?>
