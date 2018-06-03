<?php
    require"header.php";
?>

    <script>
        $("document").ready(function() {
            $(".pemesanan").addClass("active");
        })

    </script>
    <div class="container-fluid">

        <form method="post" action="aksi/pemesanan.php">

        <div class="row">
            <div class="col-lg-3">Menu</div>
            <div class="col-lg-9">
                <select name="menu" class="form-control">
                                    <?php
                                        $q=$con->query("select * from menu");
                                        while($r=$q->fetch_assoc()){
                                            echo "<option value='{$r['id']}'>{$r['nama_menu']}</option>";
                                        }
                                    ?>
                                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">Nama Pemesan</div>
            <div class="col-lg-9"><input type="text" name="nama" class="form-control"></div>
        </div>
        <div class="row">
            <div class="col-lg-3">Tanggal Pesan</div>
            <div class="col-lg-9"><input type="date" name="tanggal" class="form-control"></div>
        </div>
        <div class="row">
            <div class="col-lg-3">Tanggal Bayar</div>
            <div class="col-lg-9"><input type="date" name="tanggalbayar" class="form-control"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </div>
    
        </form></div>