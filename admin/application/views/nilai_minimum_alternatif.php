<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Nilai Minimum Jurusan
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <a href="<?= site_url('alternatif'); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            <button type="button" data-toggle="modal" data-target="#tambah-nilai" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Nilai</button>
            <div class="box-body">

                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
                            <th>Kimia</th>
                            <th>Biologi</th>
                            <th>Fisika</th>
                            <th>Matematika</th>
                            <th>Bhs Inggris</th>
                            <th>Bhs Indonesia</th>
                            <th>Realistis</th>
                            <th>Intelektual</th>
                            <th>Artistik</th>
                            <th>Sosial</th>
                            <th>Enterprise</th>
                            <th>Konvensional</th>
                            <th>Linguistik</th>
                            <th>Matematikal</th>
                            <th>Musikal</th>
                            <th>Kinestik</th>
                            <th>Spartial</th>
                            <th>Intrapersonal</th>
                            <th>Interpersonal</th>
                            <th>Natrularistik</th>
                            <th>Eksistensial</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($detail as $a) { ?>
                            <tr>
                                <form action="<?= base_url('admin/konversi_alternatif/' . $a->id_nilai_alternatif) ?>" method="POST">
                                    <td><?= $a->nama_alternatif ?></td>
                                    <td><?= $a->kimia ?><input type="text" class="form-control" style="width: 70px;" readonly name="kimia" value="<?= $a->kimia <= 100 && $a->kimia >= 80 ? 'Tinggi' : ($a->kimia <= 79 && $a->kimia >= 69 ? 'Normal' : ($a->kimia <= 68 && $a->kimia >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->biologi ?><input type="text" class="form-control" style="width: 70px;" readonly name="biologi" value="<?= $a->biologi <= 100 && $a->biologi >= 80 ? 'Tinggi' : ($a->biologi <= 79 && $a->biologi >= 69 ? 'Normal' : ($a->biologi <= 68 && $a->biologi >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->fisika ?><input type="text" class="form-control" style="width: 70px;" readonly name="fisika" value="<?= $a->fisika <= 100 && $a->fisika >= 80 ? 'Tinggi' : ($a->fisika <= 79 && $a->fisika >= 69 ? 'Normal' : ($a->fisika <= 68 && $a->fisika >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->matematika ?><input type="text" class="form-control" style="width: 70px;" readonly name="matematika" value="<?= $a->matematika <= 100 && $a->matematika >= 80 ? 'Tinggi' : ($a->matematika <= 79 && $a->matematika >= 69 ? 'Normal' : ($a->matematika <= 68 && $a->matematika >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->bhs_inggris ?><input type="text" class="form-control" style="width: 70px;" readonly name="bhs_inggris" value="<?= $a->bhs_inggris <= 100 && $a->bhs_inggris >= 80 ? 'Tinggi' : ($a->bhs_inggris <= 79 && $a->bhs_inggris >= 69 ? 'Normal' : ($a->bhs_inggris <= 68 && $a->bhs_inggris >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->bhs_indonesia ?><input type="text" class="form-control" style="width: 70px;" readonly name="bhs_indonesia" value="<?= $a->bhs_indonesia <= 100 && $a->bhs_indonesia >= 80 ? 'Tinggi' : ($a->bhs_indonesia <= 79 && $a->bhs_indonesia >= 69 ? 'Normal' : ($a->bhs_indonesia <= 68 && $a->bhs_indonesia >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->realistis ?><input type="text" class="form-control" style="width: 70px;" readonly name="realistis" value="<?= $a->realistis <= 100 && $a->realistis >= 80 ? 'Tinggi' : ($a->realistis <= 79 && $a->realistis >= 69 ? 'Normal' : ($a->realistis <= 68 && $a->realistis >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->intelektual ?><input type="text" class="form-control" style="width: 70px;" readonly name="intelektual" value="<?= $a->intelektual <= 100 && $a->intelektual >= 80 ? 'Tinggi' : ($a->intelektual <= 79 && $a->intelektual >= 69 ? 'Normal' : ($a->intelektual <= 68 && $a->intelektual >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->artistik ?><input type="text" class="form-control" style="width: 70px;" readonly name="artistik" value="<?= $a->artistik <= 100 && $a->artistik >= 80 ? 'Tinggi' : ($a->artistik <= 79 && $a->artistik >= 69 ? 'Normal' : ($a->artistik <= 68 && $a->artistik >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->sosial ?><input type="text" class="form-control" style="width: 70px;" readonly name="sosial" value="<?= $a->sosial <= 100 && $a->sosial >= 80 ? 'Tinggi' : ($a->sosial <= 79 && $a->sosial >= 69 ? 'Normal' : ($a->sosial <= 68 && $a->sosial >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->enterprise ?><input type="text" class="form-control" style="width: 70px;" readonly name="enterprise" value="<?= $a->enterprise <= 100 && $a->enterprise >= 80 ? 'Tinggi' : ($a->enterprise <= 79 && $a->enterprise >= 69 ? 'Normal' : ($a->enterprise <= 68 && $a->enterprise >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->konvensional ?><input type="text" class="form-control" style="width: 70px;" readonly name="konvensional" value="<?= $a->konvensional <= 100 && $a->konvensional >= 80 ? 'Tinggi' : ($a->konvensional <= 79 && $a->konvensional >= 69 ? 'Normal' : ($a->konvensional <= 68 && $a->konvensional >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->linguistik ?><input type="text" class="form-control" style="width: 70px;" readonly name="linguistik" value="<?= $a->linguistik <= 100 && $a->linguistik >= 80 ? 'Tinggi' : ($a->linguistik <= 79 && $a->linguistik >= 69 ? 'Normal' : ($a->linguistik <= 68 && $a->linguistik >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->matematikal ?><input type="text" class="form-control" style="width: 70px;" readonly name="matematikal" value="<?= $a->matematikal <= 100 && $a->matematikal >= 80 ? 'Tinggi' : ($a->matematikal <= 79 && $a->matematikal >= 69 ? 'Normal' : ($a->matematikal <= 68 && $a->matematikal >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->musikal ?><input type="text" class="form-control" style="width: 70px;" readonly name="musikal" value="<?= $a->musikal <= 100 && $a->musikal >= 80 ? 'Tinggi' : ($a->musikal <= 79 && $a->musikal >= 69 ? 'Normal' : ($a->musikal <= 68 && $a->musikal >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->kinestik ?><input type="text" class="form-control" style="width: 70px;" readonly name="kinestik" value="<?= $a->kinestik <= 100 && $a->kinestik >= 80 ? 'Tinggi' : ($a->kinestik <= 79 && $a->kinestik >= 69 ? 'Normal' : ($a->kinestik <= 68 && $a->kinestik >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->spartial ?><input type="text" class="form-control" style="width: 70px;" readonly name="spartial" value="<?= $a->spartial <= 100 && $a->spartial >= 80 ? 'Tinggi' : ($a->spartial <= 79 && $a->spartial >= 69 ? 'Normal' : ($a->spartial <= 68 && $a->spartial >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->intrapersonal ?><input type="text" class="form-control" style="width: 70px;" readonly name="intrapersonal" value="<?= $a->intrapersonal <= 100 && $a->intrapersonal >= 80 ? 'Tinggi' : ($a->intrapersonal <= 79 && $a->intrapersonal >= 69 ? 'Normal' : ($a->intrapersonal <= 68 && $a->intrapersonal >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->interpersonal ?><input type="text" class="form-control" style="width: 70px;" readonly name="interpersonal" value="<?= $a->interpersonal <= 100 && $a->interpersonal >= 80 ? 'Tinggi' : ($a->interpersonal <= 79 && $a->interpersonal >= 69 ? 'Normal' : ($a->interpersonal <= 68 && $a->interpersonal >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->natrularistik ?><input type="text" class="form-control" style="width: 70px;" readonly name="natrularistik" value="<?= $a->natrularistik <= 100 && $a->natrularistik >= 80 ? 'Tinggi' : ($a->natrularistik <= 79 && $a->natrularistik >= 69 ? 'Normal' : ($a->natrularistik <= 68 && $a->natrularistik >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td><?= $a->eksistensial ?><input type="text" class="form-control" style="width: 70px;" readonly name="eksistensial" value="<?= $a->eksistensial <= 100 && $a->eksistensial >= 80 ? 'Tinggi' : ($a->eksistensial <= 79 && $a->eksistensial >= 69 ? 'Normal' : ($a->eksistensial <= 68 && $a->eksistensial >= 0 ? 'Rendah' : 'Rendah')) ?>" /></td>
                                    <td>
                                        <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editAlternatif<?= $a->id_nilai_alternatif ?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                        <a href="<?= base_url('Admin/coba_konversi/' . $a->id_nilai_alternatif) ?>" class="btn btn-xs btn-primary">Coba</a>
                                        <button type="submit" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> Konversi</button>
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusAlternatif<?= $a->id_nilai_alternatif ?>"><i class="fa fa-trash"></i> Hapus</button>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- Modal Tambah Nilai Minimum -->
<div class="modal fade" id="tambah-nilai">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                <h4 class="modal-title"><i class="fa fa-clone"></i> Tambah Nilai Minimum Jurusan</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/act_tnilaiminimum'); ?>" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="act_tambahnilaimin"></label>
                            <input type="hidden" name="nama_alternatif" class="form-control" placeholder="" value="<?= $detail->id_alternatif ?>">
                        </div>
                        <div class="form-group">
                            <label for="act_tambahnilaimin">mapel :</label>
                            <select name="mapel" id="" class="form-control">
                                <option value="">Pilih Mata Pelajaran...</option>
                                <?php foreach ($mapel as $mpl) { ?>
                                    <option value="<?= $mpl->id_mapel; ?>"><?= $mpl->mapel; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="act_tambahnilaimin">Nilai :</label>
                            <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai Minimum...">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- End Modal Tambah Pelajaran -->
<!-- Modal Hapus Nilai Minimum -->
<?php foreach ($detail as $a) { ?>
    <div class="modal fade" id="hapusAlternatif<?= $a->id_alternatif; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Jurusan Kuliah</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <h4>Anda yakin akan menghapus Nilai Minimum <b><?= $a->nama_alternatif; ?></b> ?</h4>
                        <p class="text-danger">*Menghapus data terpilih dapat menghapus semua data yang terkait termasuk alternatif jurusan , </p>
                    </div>
                    <div class="box-footer">
                        <a href="<?= base_url('admin/act_hapusnilaimin/' . $a->id_alternatif); ?>" class="btn btn-danger">Ya</a> &nbsp;
                        <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
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
</script>