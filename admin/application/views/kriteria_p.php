<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Kriteria
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <button type="button" data-toggle="modal" data-target="#tambah-kriteria" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Kriteria</button>

                <!-- Modal Tambah Kriteria -->
                <div class="modal fade" id="tambah-kriteria">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-clone"></i> Tambah Kriteria</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_kriteria');?>" method="post" role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="Kriteria">Kriteria :</label>
                                            <input type="text" name="kriteria" class="form-control" placeholder="Masukkan Data Kriteria...">
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
            </div>
            <div class="box-body">
                <table id="tabelKriteria" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kriteria</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($kriteria_p as $k){
                        ?>
                        <tr>
                            <td><?= $no++;?>.</td>
                            <td><?= $k->nama_kriteria; ?></td>
                            <td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editKriteria<?= $k->id_kriteria;?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusKriteria<?= $k->id_kriteria;?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal Edit Mapel -->
                        <div class="modal fade" id="editKriteria<?= $k->id_kriteria;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-clone"></i> Edit Data Kriteria</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/edit_kriteria/'.$k->id_kriteria);?>" method="post">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nama_kriteria">Nama Kriteria :</label>
                                                    <input type="text" name="nama_kriteria" class="form-control" value="<?= $k->nama_kriteria; ?>">
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
                        <!-- Modal Hapus Mata Pelajaran -->
                        <div class="modal fade" id="hapusKriteria<?= $k->id_kriteria;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Data Kriteria</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus Data Kriteria <b><?= $k->nama_kriteria;?></b> ?</h4>
                                            <p class="text-danger">*Menghapus data kriteria terpilih dapat menghapus semua data yang terkait termasuk sub_kriteria dan alternatif</p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/hapus_kriteria/'.$k->id_kriteria);?>" class="btn btn-danger">Ya</a> &nbsp;
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