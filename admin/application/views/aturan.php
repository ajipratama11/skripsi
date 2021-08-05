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
                                <td><?= $n->nis ?></td>
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
                                    <a href="<?= base_url('KlasifikasiNB/konvert_nilai/'. $n->id_nilai) ?>" class="btn btn-primary">Konversi nilai</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
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
</script>