<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Nilai Minimum Jurusan <?= $detail->nama_alternatif ?>
        </h1>
    </section>
        <div class="box box-warning">
            <div class="box-body">    
            <a href="<?= site_url('alternatif');?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i>  Kembali</a>
            <button type="button" data-toggle="modal" data-target="#tambah-nilai" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Nilai</button>
            <!-- Modal Tambah Nilai Minimum -->
            <div class="modal fade" id="tambah-nilai">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-clone"></i> Tambah Nilai Minimum Jurusan</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/act_tnilaiminimum');?>" method="post" role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="act_tambahnilaimin"></label>
                                            <input type="hidden" name="nama_alternatif" class="form-control" placeholder="" value="<?= $detail->id_alternatif ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="act_tambahnilaimin">mapel :</label>
                                            <select name="mapel" id="" class="form-control">
                                                <option value="">Pilih Mata Pelajaran...</option>
                                                <?php foreach($mapel as $mpl){ ?>
                                                <option value="<?= $mpl->id_mapel;?>"><?= $mpl->mapel;?></option>
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
            <table id="tabelSiswa" class="table table-bordered table-striped table-hover" id="tabelSiswa">
                    <thead>
                        <tr>
                            <?php foreach ($mapel as $mpl) { ?>
                                <th><?= $mpl->mapel ?></th>
                            <?php } ?>
                                <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php for ($i = 0; $i < count($hasil); $i++) { ?>
                                <td><?= $hasil[$i] ?></td>
                            <?php } ?>
                            <td>
                            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editAlternatif<?= $detail->id_alternatif ?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusAlternatif<?= $detail->id_alternatif ?>"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal Hapus Nilai Minimum -->
                        <div class="modal fade" id="hapusAlternatif<?= $detail->id_alternatif;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-trash"></i> Hapus Jurusan Kuliah</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <h4>Anda yakin akan menghapus Nilai Minimum <b><?= $detail->nama_alternatif;?></b> ?</h4>
                                            <p class="text-danger">*Menghapus data terpilih dapat menghapus semua data yang terkait termasuk alternatif jurusan , </p>
                                        </div>
                                        <div class="box-footer">
                                            <a href="<?= base_url('admin/act_hapusnilaimin/'.$detail->id_alternatif);?>" class="btn btn-danger">Ya</a> &nbsp;
                                            <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
