<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Alternatif / Nilai Minimum Alternatif
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <button type="button" data-toggle="modal" data-target="#tambah-alternatif" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Alternatif</button>

                <!-- Modal Tambah Alternatif -->
                <div class="modal fade" id="tambah-alternatif">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-clone"></i> Tambah Jurusan Kuliah</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_alternatif');?>" method="post" role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama_alternatif">Nama Jurusan Kuliah :</label>
                                            <input type="text" name="nama_alternatif" class="form-control" placeholder="Masukkan Jurususan Kuliah...">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Modal Tambah Alternatif -->
            </div>
            <div class="box-body">
                <table id="tabelAlternatif" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jurusan Kuliah</th>
                            <th>Aksi</th>
                            <th>Nilai Minimum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($alternatif as $a){
                        ?>
                        <tr>
                            <td><?= $no++;?>.</td>
                            <td><?= $a->nama_alternatif; ?></td>
                            <td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editAlternatif<?= $a->id_alternatif;?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusAlternatif<?= $a->id_alternatif;?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                            <td><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#lihatnilai"><i class="fa fa-eye"> </i><a href="<?= site_url('admin/nilaimin_alternatif/'.$a->id_alternatif);?>"> Lihat </a> </button></td>
                        </tr>
                        <!-- Modal Edit Mapel -->
                        <div class="modal fade" id="editAlternatif<?= $a->id_alternatif;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-clone"></i> Edit Data Jurusan Kuliah</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/edit_alternatif/'.$a->id_alternatif);?>" method="post">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nama_alternatif">Nama Jurusan Kuliah :</label>
                                                    <input type="text" name="nama_alternatif" class="form-control" value="<?= $a->nama_alternatif; ?>">
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
                        <!-- Modal Hapus alternatif -->
                        <div class="modal fade" id="hapusAlternatif<?= $a->id_alternatif;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Jurusan Kuliah</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus Alternatif <b><?= $a->alternatif;?></b> ?</h4>
                                            <p class="text-danger">*Menghapus data terpilih dapat menghapus semua data yang terkait termasuk nilai minimu jurusan kuliah , </p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/hapus_alternatif/'.$a->id_alternatif);?>" class="btn btn-danger">Ya</a> &nbsp;
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