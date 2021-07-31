<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Sub Kriteria
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <button type="button" data-toggle="modal" data-target="#tambah-sub_kriteria" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Sub kriteria</button>

                <!-- Modal Tambah Sub Kriteria -->
                <div class="modal fade" id="tambah-sub_kriteria">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-clone"></i> Tambah Sub Kriteria</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_subk');?>" method="post" role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama_sub">Sub Kriteria :</label>
                                            <input type="text" name="nama_sub" class="form-control" placeholder="Masukkan Data Sub Kriteria...">
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <select name="nama_kriteria" id="" class="form-control">
                                                <option value="">Pilih Kriteria...</option>
                                                <?php foreach($list_kriteria as $l){ ?>
                                                <option value="<?= $l->id_kriteria;?>"><?= $l->nama_kriteria;?></option>
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
                </div> <!-- End Modal Tambah Sub Kriteria -->
            </div>
            <div class="box-body">
                <table id="tabelKriteria" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sub Kriteria</th>
                            <th>Kriteria</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($list_subk as $s){
                        ?>
                        <tr>
                            <td><?= $no++;?>.</td>
                            <td><?= $s->nama_sub; ?></td>
                            <td><?= $s->nama_kriteria; ?></td>
                            <td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editsubk<?= $s->id_sub_kriteria;?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapussubk<?= $s->id_sub_kriteria;?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="editsubk<?= $s->id_sub_kriteria;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-th-large"></i> Edit Data Sub Kriteria</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/edit_subk/'.$s->id_sub_kriteria);?>" method="post" role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nama_sub">Nama Sub Kriteria : </label>
                                                    <input type="text" readonly="readonly" name="nama_sub" class="form-control" value="<?= $s->nama_sub;?>" placeholder="Masukkan Data Sub Kriteria...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_kriteria">nama_kriteria :</label>
                                                    <select name="nama_kriteria" id="" class="form-control">
                                                        <option value="<?= $s->nama_kriteria;?>" selected><?= $s->nama_kriteria;?></option>
                                                        <?php
                                                        foreach($list_kriteria as $n){
                                                        ?>
                                                        <option value="<?= $n->id_kriteria;?>"><?= $n->nama_kriteria;?></option>
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
                        </div><!-- End Modal -->
                        <!-- Modal Hapus Sub Kriteria -->
                        <div class="modal fade" id="hapussubk<?= $s->id_sub_kriteria;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Data Sub Kriteria</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus Data Sub Kriteria <b><?= $s->nama_sub;?></b> ?</h4>
                                            <p class="text-danger">*Menghapus data sub kriteria terpilih dapat menghapus semua data yang terkait termasuk sub_kriteria dan alternatif</p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/hapus_subk/'.$s->id_sub_kriteria);?>" class="btn btn-danger">Ya</a> &nbsp;
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