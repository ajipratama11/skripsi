<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Konversi Nilai
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border">
                <button type="button" data-toggle="modal" data-target="#tambah-konversi" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Konversi</button>
                <!-- Modal Tambah Konversi -->
                <div class="modal fade" id="tambah-konversi">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                <h4><i class="fa fa-th-large"></i> Tambah Data Konversi</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= site_url('admin/tambah_konversi');?>" method="post" role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="atribut_konversi">Atribut Konversi :</label>
                                            <input type="text" name="atribut_konversi" class="form-control" placeholder="Masukkan Atribut...">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai_kons">Nilai Konversi :</label>
                                            <select name="nilai_kons" id="" class="form-control">
                                                <option value="">Pilih Nilai Konversi...</option>
                                                <?php foreach($list_nilaikons as $j){ ?>
                                                <option value="<?= $j->id_nilai_konversi;?>"><?= $j->nilai_kons;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Modal -->
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover" id="tabelKonversi">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Atribut Konversi</th>
                            <th>Nilai Konversi</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($list_konversi as $k){
                        ?>
                        <tr>
                            <td><?= $no++;?>.</td>
                            <td><?= $k->atribut_konversi;?></td>
                            <td><?= $k->nilai_kons;?></td>
                            <td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editKonversi<?= $k->id_konversi;?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusKonversi<?= $k->id_konversi;?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal Edit Konversi -->
                        <div class="modal fade" id="editKonversi<?= $k->id_konversi;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-th-large"></i> Edit Data Konversi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/edit_konversi/'.$k->id_konversi);?>" method="post" role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="atribut_konversi">Atribut Konversi :</label>
                                                    <input type="text" readonly="readonly" name="atribut_konversi" class="form-control" value="<?= $k->atribut_konversi;?>" placeholder="Masukkan Atrbut Konversi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai_kons">Nilai Konversi :</label>
                                                    <select name="nilai_kons" id="" class="form-control">
                                                        <option value="<?= $k->nilai_kons;?>" selected><?= $k->nilai_kons;?></option>
                                                        <?php
                                                        foreach($list_nilaikons as $j){
                                                        ?>
                                                        <option value="<?= $j->id_nilai_konversi;?>"><?= $k->nilai_kons;?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Modal -->
                        <!-- Modal Hapus Konversi-->
                        <div class="modal fade" id="hapusKonversi<?= $k->id_konversi;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Data Kelas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus konversi <?= $k->atribut_konversi;?>?</h4>
                                            <p class="text-danger">*Menghapus data  terpilih akan menghapus semua data yang terkait seperti nilai dan yang lainnya...</p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/hapus_konversi/'.$k->id_konversi);?>" class="btn btn-danger">Ya</a> &nbsp;
                                            <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Modal-->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="box box-warning">
            <div class="box-header with-border">
                <button class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#tambahNilaiKonversi"><i class="fa fa-plus"></i> Tambah Nilai Konversi</button>
                <!-- Modal Tambah Nilai Konversi -->
                <div class="modal fade" id="tambahNilaiKonversi">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-th-large"></i> Tambah Nilai Konversi</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_nilai_konversi');?>" method="post" role="form">
                                    <div class="box-body">
                                        <label for="nilai_kons">Nilai Konversi :</label>
                                        <input type="text" name="nilai_kons" class="form-control" placeholder="Masukkan Nilai Konversi...">
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nilai Konversi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($list_nilaikons as $a){
                        ?>
                        <tr>
                            <td><?= $no++;?>.</td>
                            <td><?= $a->nilai_kons;?></td>
                            <td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editNilaiKoversi<?= $a->id_nilai_konversi;?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusNilaiKonversi<?= $a->id_nilai_konversi;?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal Edit Nilai Konversi -->
                        <div class="modal fade" id="editNilaiKonversi<?= $a->nilai_kons;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-th-large"></i> Edit Data Nilai Konversi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/edit_nilai_konversi/'.$a->nilai_kons);?>" method="post" role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nilai_kons">Nilai Konversi :</label>
                                                    <input type="text" name="nilai_kons" class="form-control" value="<?= $a->nilai_kons;?>" placeholder="Masukkan Nilai Konversi">
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Modal -->
                        <!-- Modal Hapus Jurusan -->
                        <div class="modal fade" id="hapusNilaiKonversi<?= $a->id_nilai_konversi;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hapus Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus nilai konversi <b><?= $a->nilai_kons;?></b> ?</h4>
                                            <p class="text-danger">*Menghapus data terpilih akan menghapus seluruh data yang terkait seperti konversi dan yang lainnya...</p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/hapus_konversi/'.$a->id_nilai_konversi);?>" class="btn btn-danger">Ya</a> &nbsp;&nbsp;
                                            <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>

<script>
$(function(){
    $('#tabelKelas').DataTable({
      'paging' : true,
      'lengthChange' : true,
      'searching' : true,
      'ordering' : true,
      'info' : true,
      'autoWidth' : false
    });
})
</script>