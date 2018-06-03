<?php require"header.php"; ?>

<script>
    $("document").ready(function() {
        $(".pembayaran").addClass("active");
        $(".namaMenu").change(function() {
            $.ajax({
                url: "aksi/pembayaran.php",
                type: "post",
                data: "autoHarga=" + $(".namaMenu").val(),
                success: function(hasil) {
                    $(".hargaMenu").val(hasil)
                }
            })
        })

        $(".jumlahBarang").keyup(function() {
            $(".totalHarga").val($(".jumlahBarang").val() * $(".hargaMenu").val())
        })
    })

</script>


<div class="container-fluid">
    <h3>Pembayaran</h3>
    <form method="post" action="aksi/pembayaran.php">
        <input name="id" class="ubahId" hidden>
        <div class="row">
            <div class="col-lg-3">Nama Menu</div>
            <div class="col-lg-9">
                <select name="namabarang" class="form-control namaMenu">
                       <option>Pilih</option>
                        <?php
                            $q=$con->query("select * from menu");
                            while($r=$q->fetch_assoc()){ ?>
                               <option value="<?=$r['id']?>"><?=$r['nama_menu']?></option> 
                            <?php }
                        ?>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">Harga</div>
            <div class="col-lg-9"><input type="number" name="harga" class="form-control hargaMenu"></div>
        </div>
        <div class="row">
            <div class="col-lg-3">Jumlah Barang</div>
            <div class="col-lg-9"><input type="number" name="jumlah" class="form-control jumlahBarang"></div>
        </div>
        <div class="row">
            <div class="col-lg-3">Total</div>
            <div class="col-lg-9"><input type="number" name="total" class="form-control totalHarga"></div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-lg-offset-3">
                <button type="submit" class="btn btn-primary" name="tambah">Ok</button>
            </div>
        </div>
    </form>
</div>
