<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Data Set
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nilai">
                Tambah Nilai
            </button>
            <div class="box-body">
                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Kimia</th>
                            <th>Biologi</th>
                            <th>Fisika</th>
                            <th>Matematika</th>
                            <th>Bhs Inggris</th>
                            <th>Bhs Indonesia</th>
                            <th>realistis</th>
                            <th>intelektual</th>
                            <th>artistik</th>
                            <th>sosial</th>
                            <th>enterprise</th>
                            <th>konvensional</th>
                            <th>linguistik</th>
                            <th>matematikal</th>
                            <th>musikal</th>
                            <th>kinestik</th>
                            <th>spartial</th>
                            <th>intrapersonal</th>
                            <th>interpersonal</th>
                            <th>naturalistik</th>
                            <th>eksistensial</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($nilai as $n) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $n->nama ?></td>
                                <td><input type="text" style="width: 100px;" name="kimia" class="form-control" value="<?= $n->nis ?>" readonly></td>
                                <td><input type="text" name="kimia" class="form-control" value="<?= $n->kimia ?>" readonly></td>
                                <td><input type="text" name="biologi" class="form-control" value="<?= $n->biologi ?>" readonly></td>
                                <td><input type="text" name="fisika" class="form-control" value="<?= $n->fisika ?>" readonly></td>
                                <td><input type="text" name="matematika" class="form-control" value="<?= $n->matematika ?>" readonly></td>
                                <td><input type="text" name="bhs_inggris" class="form-control" value="<?= $n->bhs_inggris ?>" readonly></td>
                                <td><input type="text" name="bhs_indonesia" class="form-control" value="<?= $n->bhs_indonesia ?>" readonly></td>
                                <td><input type="text" name="realistis" class="form-control" value="<?= $n->realistis ?>" readonly></td>
                                <td><input type="text" name="intelektual" class="form-control" value="<?= $n->intelektual ?>" readonly></td>
                                <td><input type="text" name="artistik" class="form-control" value="<?= $n->artistik ?>" readonly></td>
                                <td><input type="text" name="sosial" class="form-control" value="<?= $n->sosial ?>" readonly></td>
                                <td><input type="text" name="enterprise" class="form-control" value="<?= $n->enterprise ?>" readonly></td>
                                <td><input type="text" name="konvensional" class="form-control" value="<?= $n->konvensional ?>" readonly></td>
                                <td><input type="text" name="linguistik" class="form-control" value="<?= $n->linguistik ?>" readonly></td>
                                <td><input type="text" name="matematikal" class="form-control" value="<?= $n->matematikal ?>" readonly></td>
                                <td><input type="text" name="musikal" class="form-control" value="<?= $n->musikal ?>" readonly></td>
                                <td><input type="text" name="kinestik" class="form-control" value="<?= $n->kinestik ?>" readonly></td>
                                <td><input type="text" name="spartial" class="form-control" value="<?= $n->spartial ?>" readonly></td>
                                <td><input type="text" name="intrapersonal" class="form-control" value="<?= $n->intrapersonal ?>" readonly></td>
                                <td><input type="text" name="interpersonal" class="form-control" value="<?= $n->interpersonal ?>" readonly></td>
                                <td><input type="text" name="naturalistik" class="form-control" value="<?= $n->naturalistik ?>" readonly></td>
                                <td><input type="text" name="eksistensial" class="form-control" value="<?= $n->eksistensial ?>" readonly></td>
                                <td>
                                    <!-- <button type="submit" class="btn btn-primary">Konversi Nilai</button> -->
                                    <a href="<?= base_url('KlasifikasiNB/konversi_nb/' . $n->id_nilai) ?>" class="btn btn-primary">Status</a> |
                                    <a href="<?= base_url('Admin/konversi_bobot/' . $n->id_nilai) ?>" class="btn btn-success">Konversi bobot</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <div class="form-group">
                    <input type="text" id="satu" value="12"> + <input type="text" id="dua" value="0.5"> = <input type="text" id="hasil">
                </div> -->
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="nilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Admin/save_nilai') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" data-toggle="modal" data-target="#siswa" class="btn btn-primary mb-3">Cari Siswa <i class="fa fa-search"></i></button>
                    <br>
                    <div class="form-group">
                        <label>Siswa</label>
                        <input type="text" id="namasiswa" name="nama" class="form-control">
                        <input type="hidden" id="id_siswa" name="id_siswa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" id="nis" name="nis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kimia</label>
                        <input type="text" name="kimia" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Biologi</label>
                        <input type="text" name="biologi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Fisika</label>
                        <input type="text" name="fisika" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Matematika</label>
                        <input type="text" name="matematika" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bahasa Inggris</label>
                        <input type="text" name="bhs_inggris" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bahasa Indonesia</label>
                        <input type="text" name="bhs_indonesia" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Realistis</label>
                        <input type="text" name="realistis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Intelektual</label>
                        <input type="text" name="intelektual" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Artistik</label>
                        <input type="text" name="artistik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>sosial</label>
                        <input type="text" name="sosial" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>enterprise</label>
                        <input type="text" name="enterprise" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>konvensional</label>
                        <input type="text" name="konvensional" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>linguistik</label>
                        <input type="text" name="linguistik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>matematikal</label>
                        <input type="text" name="matematikal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>musikal</label>
                        <input type="text" name="musikal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>kinestik</label>
                        <input type="text" name="kinestik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>spartial</label>
                        <input type="text" name="spartial" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>intrapersonal</label>
                        <input type="text" name="intrapersonal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>interpersonal</label>
                        <input type="text" name="interpersonal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>naturalistik</label>
                        <input type="text" name="naturalistik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>eksistensial</label>
                        <input type="text" name="eksistensial" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="content">
                    <div class="box box-warning">
                        <div class="box-body">
                            <table id="datasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>Nama</th>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datasiswa as $ds) : ?>
                                        <tr>
                                            <td><input type="checkbox" name="id_siswa" value="<?= $ds->id_siswa ?>" class="selected"></td>
                                            <td><?= $ds->nama ?></td>
                                            <td><?= $ds->nis ?></td>
                                            <td><?= $ds->kelas ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary klik-pilih" data-dismiss="modal">Pilih</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataset').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'searching': false,
            'autoWidth': false
        });
    });

    $(document).ready(function() {
        $('#datasiswa').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'searching': true,
            'autoWidth': false
        });
    });

    $(document).ready(function() {
        $("#satu, #dua").each(function() {
            var angka_awl = $("#satu").val();
            // var selisih = $("#selisih").val();
            var angka_akh = $("#dua").val();

            var total = (parseFloat(angka_awl) + parseFloat(angka_akh));
            $("#hasil").val(total).toFixed(2);
            console.log(Number(total));
        });
    });

    $(".selected").on("click", function() {
        if ($(".selected:checked").length < 2) {
            $('.klik-pilih').prop('disabled', false);
            //$('.diambil').prop('disabled', false);
        } else {
            $('.klik-pilih').prop('disabled', true);
            //$('.diambil').prop('disabled', true);
        }
    });

    $('.klik-pilih').click(function(e) {
        e.preventDefault();
        var arr = [];
        var check = $('.selected:checked').val();
        console.log('checked', check);
        $.ajax({
            url: "<?php echo base_url('Admin/get_id/') ?>" + check,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                $('[name="id_siswa"]').val(result.id_siswa);
                //$('[name="id_invoices"]').val(result.id_service);
                $('[name="nama"]').val(result.nama);
                $('[name="nis"]').val(result.nis);
                // $('[name="no_telp"]').val(result.no_telp);
                // $('[name="nama_produk"]').val(result.nama_produk);
                // $('[name="tanggal"]').val(result.tanggal);
                // $('[name="kerusakan"]').val(result.kerusakan);
                // $('[name="total_pembayaran"]').val(result.total_pembayaran);
                // $('#grandtotal').val(result.total_pembayaran);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data Eror');
            }
        })
    })
</script>