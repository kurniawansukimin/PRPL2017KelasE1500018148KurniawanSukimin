<?php
    require"header.php";
    require"../asset/koneksi.php";
?>

    <script>
        $("document").ready(function() {
             $(".penghasilan").addClass("active");
            $(".table").DataTable()

            $(".ubah").click(function() {
                $(".ubahId").val($(this).attr('value'))
            })
        })

    </script>
    <div class="container-fluid">
        <h3>
            Penghasilan

        </h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Kasir</td>
                    <td>Tanggal</td>
                    <td>Menu</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>Total</td>

                </tr>
            </thead>

            <tbody>
                <?php
                $totalKeseluruhan=0;
                $q=$con->query("select a.*, b.nama_menu, c.nama from pembayaran a, menu b, akun c where a.menu=b.id and a.kasir=c.id");
                while($r=$q->fetch_assoc()){
                    extract($r); ?>
                    <tr>
                        <td>
                            <?=$nama?>
                        </td>
                        <td>
                            <?=$tanggalBayar?>
                        </td>
                        <td>
                            <?=$nama_menu?>
                        </td>
                        <td>
                            <?=$harga?>
                        </td>
                        <td>
                            <?=$jumlah?>
                        </td>
                        <td>
                            <?=$jumlah*$harga?>
                            <?php $totalKeseluruhan=$totalKeseluruhan+$jumlah*$harga; ?>
                        </td>


                    </tr>
                    <?php }
            ?>
            </tbody>
        </table>
<?="<p style='font-size:18px'>Total Penghasilan: <b>$totalKeseluruhan</b></p>"?>

    </div>
