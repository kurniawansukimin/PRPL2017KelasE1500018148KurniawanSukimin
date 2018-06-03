<?php
    require"../../asset/koneksi.php";
    
    if(isset($_POST['autoHarga'])){
        echo $q=$con->query("select harga from menu where id='{$_POST['autoHarga']}'")->fetch_assoc()['harga'];
    }

     if(isset($_POST['tambah'])){
         $kasir="khtyw";
         $tanggal=date('d-m-Y');
         $q=$con->query("insert into pembayaran values('','$kasir','$tanggal','{$_POST['namabarang']}','{$_POST['jumlah']}','{$_POST['harga']}')");
         header("location:../");
    }
?>
