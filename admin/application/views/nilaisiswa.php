<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Nilai Siswa
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Nama">Nama : <?= $detail->nama ?></label>
                            </div>
                            <div class="form-group">
                                <label for="Nama">NIS : <?= $detail->nis ?></label>
                            </div>
                            <button type="button" data-toggle="modal" data-target="#tambahNilai" class="btn btn-sm btn-flat btn-success"><i class="fa fa-user-plus"></i> Tambah Nilai</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box box-warning">
            <div class="box-body">
                <table id="tabelSiswa" class="table table-bordered table-striped table-hover" id="tabelSiswa">
                    <thead>
                        <tr>
                            <?php foreach ($mapel as $mpl) { ?>
                                <th><?= $mpl->mapel ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php for ($i = 0; $i < count($hasil); $i++) { ?>
                                <td><?= $hasil[$i] ?></td>
                            <?php } ?>
                        </tr>
                   </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
