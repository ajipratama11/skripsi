<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<!-- <div class="content-wrapper"> -->

    <!-- <section class="content-header">
        <h1 class="text-center">
            Rekomendasi Jurusan
        </h1>
    </section> -->
    <!-- <section class="content"> -->
        <div class="box box-warning">
            <div class="box-body">
                <table id="matrik" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Nilai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php
                    // if ($status == 0) {
                    //     $data = 'Belum ada status';
                    // } else {
                    //     $data = 'Diterima';
                    // }
                    // $data2 = 'Belum ada status';
                    // ?>
                    <tbody class="ranking">
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="persen_sipil" name="teknik_sipil" value="<?= $rekom['teknik_sipil'] ?>" readonly style="width: 30px;">%</td>
                            <!-- <td><?= $data ?></td> -->
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="persen_informatika" name="teknik_informatika" value="<?= $rekom['teknik_informatika'] ?>" readonly style="width: 30px;">%</td>
                            <!-- <td><?= $data ?></td> -->
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="persen_industri" name="teknik_industri" value="<?= $rekom['teknik_industri'] ?>" readonly style="width: 30px;">%</td>
                        </tr>
                    </tbody>
                </table>
                </form>
                <!-- <input type="text" id="jumlah_total"> -->
            </div>
        </div>
    <!-- </section> -->
<!-- </div> -->
<script>
    $(document).ready(function() {
        $('#dataset').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'searching': false,
            'autoWidth': false,
            "ordering": false,
            "info": false
        });
    });

    $(document).ready(function() {
        $('#matrik').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'autoWidth': true,
            "ordering": false,
            "searching": false,
            "info": false
        });
    });

    $(document).ready(function() {
        $('#rank').DataTable({
            'paging': false,
            //'lengthChange': true,
            //"scrollX": true,
            //'autoWidth': true,
            "ordering": true,
            "searching": false,
            "info": false
        });
    });
</script>