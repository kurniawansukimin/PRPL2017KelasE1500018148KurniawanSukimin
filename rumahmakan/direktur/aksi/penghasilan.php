<?php
    require"../../asset/koneksi.php";
    
    if(isset($_POST['tambah'])){
        $str="abcdefghijklmnopqrstuvwxyz";
        $id=$password="";
        
        for($i=1;$i<=5;$i++){
            $id.=$str[rand(0,25)];
            $password.=$str[rand(0,25)];
        }
        $q=$con->query("insert into akun values('$id','$password','{$_POST['nama']}','{$_POST['tanggal']}','{$_POST['pendidikan']}','{$_POST['alamat']}','{$_POST['jenisKelamin']}','{$_POST['ss']}','{$_POST['status']}','{$_POST['gaji']}')");
        header("location:../penghasilan.php");
    }

    else if(isset($_GET['hapus'])){
        $q=$con->query("delete from akun where id='{$_GET['hapus']}'");
        header("location:../penghasilan.php");
    }
    
    else if(isset($_POST['ubah'])){
        $q=$con->query("update akun set pendidikan='{$_POST['pendidikan']}', status_sosial='{$_POST['ss']}', alamat='{$_POST['alamat']}', status='{$_POST['status']}',gaji='{$_POST['gaji']}' where id='{$_POST['id']}'");
        header("location:../penghasilan.php");
    }
?>
