<?php
    require"header.php";
?>

    <script>
        $("document").ready(function() {
            $(".table").DataTable()

            $(".ubah").click(function() {
                $(".ubahId").val($(this).attr('value'))
            })
        })

    </script>
    <div class="container-fluid">
        <h3>
            Manajemen Data SDM
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambah">
          <span class="glyphicon glyphicon-plus"></span>
        </button>
        </h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Password</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Pendidikan</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Status Sosial</td>
                    <td>Status</td>
                    <td>Gaji</td>
                    <td>Aksi</td>

                </tr>
            </thead>

            <tbody>
                <?php
                $q=$con->query("select * from akun");
                while($r=$q->fetch_assoc()){
                    extract($r); ?>
                    <tr>
                        <td>
                            <?=$id?>
                        </td>
                        <td>
                            <?=$password?>
                        </td>
                        <td>
                            <?=$nama?>
                        </td>
                        <td>
                            <?=$tanggalLahir?>
                        </td>
                        <td>
                            <?=$pendidikan?>
                        </td>
                        <td>
                            <?=$alamat?>
                        </td>
                        <td>
                            <?=$jenisKelamin?>
                        </td>
                        <td>
                            <?=$status_sosial?>
                        </td>
                        <td>
                            <?=$status?>
                        </td>
                        <td>
                            <?=$gaji?>
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-edit ubah" data-toggle="modal" data-target="#modalUbah" value="<?=$id?>"></span>
                            <span class="glyphicon glyphicon-trash" onclick="location.href='aksi/manajemensdm.php?hapus=<?=$id?>'"></span>
                        </td>
                    </tr>
                    <?php }
            ?>
            </tbody>
        </table>

        <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <form method="post" action="aksi/manajemensdm.php" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">Nama</div>
                            <div class="col-lg-9"><input type="text" name="nama" class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Tanggal Lahir</div>
                            <div class="col-lg-9"><input type="date" name="tanggal" class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Pendidikan</div>
                            <div class="col-lg-9">
                                <select name="pendidikan" class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Alamat</div>
                            <div class="col-lg-9"><textarea name="alamat" class="form-control"></textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Jenis Kelamin</div>
                            <div class="col-lg-9">
                                <input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki
                                <input type="radio" name="jenisKelamin" value="Perempuan">Perempuan
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Status Sosial</div>
                            <div class="col-lg-9">
                                <select name="ss" class="form-control">
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Status</div>
                            <div class="col-lg-9">
                                <select name="status" class="form-control">
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Cleaning Service">Cleaning Service</option>
                        <option value="Satpam">Satpam</option>
                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">Gaji</div>
                        <div class="col-lg-9"><input type="text" name="gaji" class="form-control"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <form method="post" action="aksi/manajemensdm.php" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ubah Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <input name="id" class="ubahId" hidden>
                        <div class="row">
                            <div class="col-lg-3">Pendidikan</div>
                            <div class="col-lg-9">
                                <select name="pendidikan" class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Alamat</div>
                            <div class="col-lg-9"><textarea name="alamat" class="form-control"></textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Status Sosial</div>
                            <div class="col-lg-9">
                                <select name="ss" class="form-control">
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Status</div>
                            <div class="col-lg-9">
                                <select name="status" class="form-control">
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Cleaning Service">Cleaning Service</option>
                        <option value="Satpam">Satpam</option>
                    </select>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-lg-3">Gaji</div>
                        <div class="col-lg-9"><input type="text" name="gaji" class="form-control"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
