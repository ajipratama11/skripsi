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
            <div class="box-body">
                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>nama</th>
                            <th>NIS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sub as $s) : ?>
                            <tr>
                                <td><?= $s->id_siswa ?></td>
                                <td><?= $s->nama ?></td>
                                <td><?= $s->nis ?></td>
                                <td>
                                    <a href="#datanilai<?= $s->id_siswa ?>" data-toggle="modal" class="btn btn-primary">Lihat Nilai</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editKelas"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusKelas"><i class="fa fa-trash"></i> Hapus</button> -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php foreach ($id as $id) : ?>
    <div class="modal fade" id="datanilai<?= $id->id_siswa ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal data nilai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mapel</td>
                                    <td>Nilai</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($nilai as $n) : ?>
                                    <tr>
                                        <td><?= $n->mapel ?></td>
                                        <td><input type="text" name="nilai" value="<?= $n->nilai ?>" readonly></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Konvert Nilai</button>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
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